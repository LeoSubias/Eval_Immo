<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Annonce
 * @Vich\Uploadable
 * @ORM\Table(name="ann_annonce")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnnonceRepository")
 */
class Annonce
{
    /**
     * @var int
     *
     * @ORM\Column(name="ann_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="ann_prix", type="integer")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="ann_titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="ann_description", type="string", length=500)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="ann_nb_pieces", type="integer")
     */
    private $nbPieces;

    /**
     * @var string
     *
     * @ORM\Column(name="ann_photo", type="string", length=255)
     */
    private $photo;

    /**
    * @Vich\UploadableField(mapping="photo", fileNameProperty="photo")
    * 
    * @var File
    */
    private $photoFile;

    /**
    * @ORM\Column(type="datetime", nullable=true)
    *
    * @var \DateTime
    */
    private $updatedAt;

      /** 
     * @ORM\ManyToOne(targetEntity="Type_Annonce")
     * @ORM\JoinColumn(name="typ_oid", referencedColumnName="typ_oid")
     */
    public $type_annonce;

      /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="usr_oid", referencedColumnName="usr_oid")
     */
    private $user;

     /**
     * @ORM\ManyToOne(targetEntity="Admin")
     * @ORM\JoinColumn(name="adm_oid", referencedColumnName="adm_oid")
     */
    private $admin;

    public function __toString()
    {    
        return $this->getprix()." ".$this->getTitre(). " ".$this->getDescription(). " ".$this->getNbPieces(). " ". $this->getPhoto(). " ". (string) $this->getTypeAnnonce(). " ". $this->getUser(). " ". $this->getAdmin() ;
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
     * Set prix
     *
     * @param integer $prix
     *
     * @return Annonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set nbPieces
     *
     * @param integer $nbPieces
     *
     * @return Annonce
     */
    public function setNbPieces($nbPieces)
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }

    /**
     * Get nbPieces
     *
     * @return int
     */
    public function getNbPieces()
    {
        return $this->nbPieces;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Annonce
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set typeAnnonce.
     *
     * @param \AppBundle\Entity\Type_Annonce|null $typeAnnonce
     *
     * @return Annonce
     */
    public function setType_Annonce(\AppBundle\Entity\Type_Annonce $typeAnnonce = null)
    {
        $this->type_annonce = $typeAnnonce;

        return $this;
    }

    /**
     * Get typeAnnonce.
     *
     * @return \AppBundle\Entity\Type_Annonce|null
     */
    public function getType_Annonce()
    {
        return $this->type_annonce;
    }

    /**
     * Set user.
     *
     * @param \AppBundle\Entity\User|null $user
     *
     * @return Annonce
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \AppBundle\Entity\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set admin.
     *
     * @param \AppBundle\Entity\Admin|null $admin
     *
     * @return Annonce
     */
    public function setAdmin(\AppBundle\Entity\Admin $admin = null)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin.
     *
     * @return \AppBundle\Entity\Admin|null
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile 
     *
     * @return Photo
    */
    public function setPhotoFile(File $photo = null)
    {
        $this->photoFile = $photo;

        if ($photo) 
            $this->updatedAt = new \DateTimeImmutable();
        
        return $this;
    }
    /**
     * @return File|null
     */
    public function getPhotoFile()
    {
        return $this->photoFile;
    }
}
