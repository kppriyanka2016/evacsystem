<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Volunteerregistration Entity
 *
 * @property int $regid
 * @property string $name
 * @property string $emailid
 * @property string $profession
 * @property string $supporttype
 * @property string $location
 * @property string $notes
 */
class Volunteerregistration extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'emailid' => true,
        'profession' => true,
        'supporttype' => true,
        'location' => true,
        'notes' => true
    ];
}