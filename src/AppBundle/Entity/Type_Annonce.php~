<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type_Annonce
 *
 * @ORM\Table(name="typ_type__annonce")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Type_AnnonceRepository")
 */
class Type_Annonce
{
    /**
     * @var int
     *
     * @ORM\Column(name="typ_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="typ_nom", type="string", length=255)
     */
    private $nom;

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
     * @return Type_Annonce
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
}

