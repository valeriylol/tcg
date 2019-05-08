<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto_fotos
 *
 * @ORM\Table(name="producto_fotos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Producto_fotosRepository")
 */
class Producto_fotos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_producto", type="integer")
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255)
     */
    private $foto;


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
     * Set idProducto
     *
     * @param integer $idProducto
     *
     * @return Producto_fotos
     */
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return int
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Producto_fotos
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }
}

