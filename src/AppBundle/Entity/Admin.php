<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * Admin
 *
 * @ORM\Table(name="adm_admin")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdminRepository")
 */

class Admin extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="adm_oid", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="adm_nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adm_prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="adm_phone", type="integer", nullable=true)
     */
    private $phone;

    public function __toString()
    {    
        return $this->getNom()." ".$this->getPrenom();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Admin
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Admin
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return Admin
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return int
     */
    public function getPhone()
    {
        return $this->phone;
    }
}
