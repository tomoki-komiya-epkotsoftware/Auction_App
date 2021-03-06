<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $role
 *
 * @property \App\Model\Entity\Bidinfo[] $bidinfo
 * @property \App\Model\Entity\Biditem[] $biditems
 * @property \App\Model\Entity\Bidmessage[] $bidmessage
 * @property \App\Model\Entity\Bidrequest[] $bidrequest
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'username' => true,
        'password' => true,
        'role' => true,
        'bidinfo' => true,
        'biditems' => true,
        'bidmessage' => true,
        'bidrequest' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
}
