<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
use Cake\Mailer\MailerAwareTrait;
use Cake\Mailer\Mailer;
/**
 * Organization Controller
 *
 * @property \App\Model\Table\OrganizationTable $Organization
 *
 * @method \App\Model\Entity\Organization[] paginate($object = null, array $settings = [])
 */
class OrganizationController extends AppController
{

    use MailerAwareTrait;
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $organization = $this->paginate($this->Organization);

        $this->set(compact('organization'));
        $this->set('_serialize', ['organization']);
    }

    /**
     * View method
     *
     * @param string|null $id Organization id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $organization = $this->Organization->get($id, [
            'contain' => []
        ]);

        $this->set('organization', $organization);
        $this->set('_serialize', ['organization']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $organization = $this->Organization->newEntity();
        if ($this->request->is('post')) {
            $organization = $this->Organization->patchEntity($organization, $this->request->getData());
            if ($this->Organization->save($organization)) {
                $this->Flash->success(__('The organization has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organization could not be saved. Please, try again.'));
        }
        $this->set(compact('organization'));
        $this->set('_serialize', ['organization']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Organization id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $organization = $this->Organization->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organization = $this->Organization->patchEntity($organization, $this->request->getData());
            if ($this->Organization->save($organization)) {
                $this->Flash->success(__('The organization has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organization could not be saved. Please, try again.'));
        }
        $this->set(compact('organization'));
        $this->set('_serialize', ['organization']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Organization id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organization = $this->Organization->get($id);
        if ($this->Organization->delete($organization)) {
            $this->Flash->success(__('The organization has been deleted.'));
        } else {
            $this->Flash->error(__('The organization could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function sendEmail($user_email)
    {
      
        $loggedinuser = $this->request->session()->read('Auth.User');
        $email = new Email();
        $email->viewVars(['value' =>  $loggedinuser['email']]);  


        $email
            ->template('volunteer')
            ->emailFormat('html')
            ->subject(sprintf('Volunteer Interested %s', $loggedinuser['email']))
            ->viewVars(['username'=>$user_email ,'useremail'=>$user_email])
            ->to($user_email)
            ->send();   

        $this->Flash->success(__('Email sent.'));

        return $this->redirect(['controller'=>'Organization','action' => 'index']);
    }
}
