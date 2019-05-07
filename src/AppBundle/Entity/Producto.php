<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductoRepository")
 */
class Producto
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
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_Real", type="integer")
     */
    private $precioReal;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_Estimado", type="integer")
     */
    private $precioEstimado;

    /**
     * @var string
     *
     * @ORM\Column(name="Foto", type="blob")
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="Link", type="string")
     */
    private $link;

    /**
     * @var int
     *
     * @ORM\Column(name="Usuario_id", type="integer")
     */
    private $usuarioId;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Producto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Producto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set precioReal
     *
     * @param string $precioReal
     *
     * @return Producto
     */
    public function setPrecioReal($precioReal)
    {
        $this->precioReal = $precioReal;

        return $this;
    }

    /**
     * Get precioReal
     *
     * @return string
     */
    public function getPrecioReal()
    {
        return $this->precioReal;
    }

    /**
     * Set precioEstimado
     *
     * @param string $precioEstimado
     *
     * @return Producto
     */
    public function setPrecioEstimado($precioEstimado)
    {
        $this->precioEstimado = $precioEstimado;

        return $this;
    }

    /**
     * Get precioEstimado
     *
     * @return string
     */
    public function getPrecioEstimado()
    {
        return $this->precioEstimado;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Producto
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

    /**
     * Set usuarioId
     *
     * @param integer $usuarioId
     *
     * @return Producto
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get usuarioId
     *
     * @return int
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Producto
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }
}
