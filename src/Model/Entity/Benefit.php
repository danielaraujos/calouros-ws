<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Benefit Entity
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string $link
 * @property string $image
 * @property string $dir
 */
class Benefit extends Entity
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
        '*' => true,
        'id' => false
    ];

    protected function _getDir() {
        return "uploads/benefits/";
    }

    protected function _getImageLink() {
        if(isset($this->_properties['id']) && strlen($this->_properties['image']) > 1) {
            return $this->_properties['dir'] . $this->_properties['image'];
        }
        //return 'avatar.png';
    }
    protected function _getThumbnailLink() {
        if(isset($this->_properties['id']) && strlen($this->_properties['image']) > 1) {
            return $this->_properties['dir'] . 'thumbnail-' . $this->_properties['image'];
        }
        //return 'avatar.png';
    }
}
