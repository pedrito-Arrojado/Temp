<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Equipamento")
 **/
class Equipamento
{

    /**
     * @ORM\Id
     * @ORM\Column(name="ID_equipamento", type="integer")
     * @ORM\GeneratedValue
     **/
    protected $ID_equipamento;

    /**
     * @ORM\Column(name="Nome", type="string")
     * @Assert\NotNull(
     *     message = "O campo Nome Camisola é obrigatório!"
     * )
     * @Assert\Regex(
     *     pattern     = "/^[a-zA-ZàáãâéêíóõôúçñÀÁÃÂÉÊÍÓÕÔÚÇÑ. ]+$/",
     *     htmlPattern = "^[a-zA-ZàáãâéêíóõôúçñÀÁÃÂÉÊÍÓÕÔÚÇÑ. ]+$",
     *     message="O campo Nome Camisola não pode conter números ou carateres especiais."
     * )
     * @Assert\Length(
     *      min = 2,
     *      max = 25,
     *      minMessage = "O campo Nome Camisola tem que ter pelo menos {{ limit }} caracteres.",
     *      maxMessage = "O campo Nome Camisola não pode ter mais de {{ limit }} caracteres."
     * )
     **/
    protected $Nome;

    /**
     * @ORM\ManyToOne(targetEntity="Tamanho")
     * @ORM\JoinColumn(name="REF_Tamanho", referencedColumnName="ID_Tamanho")
     **/
    protected $Tamanho;

    /**
     * @ORM\Column(name="Numero", type="integer")
     * @Assert\Regex(
     *     pattern     = "/^[0-9]+$/i",
     *     htmlPattern = "^[0-9]+$",
     *     message="O campo Número da Camisola é numérico."
     * )
     * @Assert\Length(
     *      min = 1,
     *      max = 2,
     *      minMessage = "O campo Número da Camisola tem que ter pelo menos {{ limit }} caracteres.",
     *      maxMessage = "O campo Número da Camisola não pode ter mais que {{ limit }} caracteres.",
     * )
     **/
    protected $Numero;


    /**
     * @ORM\ManyToOne(targetEntity="Epoca")
     * @ORM\JoinColumn(name="REF_Epoca", referencedColumnName="ID_epoca")
     **/
    protected $Epoca;



    /**
     * @ORM\OneToMany(targetEntity="Entidade", mappedBy="Equipamento")
     */
    protected $EntidadesEquip;

    /**
     * @ORM\Column(name="observacoes", type="text")
     */
    protected $observacoes;

    /**
     * Get iDEquipamento
     *
     * @return integer
     */
    public function getIDEquipamento()
    {
        return $this->ID_equipamento;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Equipamento
     */
    public function setNome($nome)
    {
        $this->Nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Equipamento
     */
    public function setNumero($numero)
    {
        $this->Numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * Set tamanho
     *
     * @param \AppBundle\Entity\Tamanho $tamanho
     *
     * @return Equipamento
     */
    public function setTamanho(\AppBundle\Entity\Tamanho $tamanho = null)
    {
        $this->Tamanho = $tamanho;

        return $this;
    }

    /**
     * Get tamanho
     *
     * @return \AppBundle\Entity\Tamanho
     */
    public function getTamanho()
    {
        return $this->Tamanho;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->EntidadesEquip = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add entidadesEquip
     *
     * @param \AppBundle\Entity\Entidade $entidadesEquip
     *
     * @return Equipamento
     */
    public function addEntidadesEquip(\AppBundle\Entity\Entidade $entidadesEquip)
    {
        $this->EntidadesEquip[] = $entidadesEquip;

        return $this;
    }

    /**
     * Remove entidadesEquip
     *
     * @param \AppBundle\Entity\Entidade $entidadesEquip
     */
    public function removeEntidadesEquip(\AppBundle\Entity\Entidade $entidadesEquip)
    {
        $this->EntidadesEquip->removeElement($entidadesEquip);
    }

    /**
     * Get entidadesEquip
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEntidadesEquip()
    {
        return $this->EntidadesEquip;
    }

    /**
     * Set observacoes
     *
     * @param text $observacoes
     *
     * @return Equipamento
     */
    public function setObservacoes($observacoes)
    {
        $this->observacoes = $observacoes;

        return $this;
    }

    /**
     * Get observacoes
     *
     * @return integer
     */
    public function getObservacoes()
    {
        return $this->observacoes;
    }

    /**
     * Set epoca
     *
     * @param \AppBundle\Entity\Epoca $epoca
     *
     * @return Equipamento
     */
    public function setEpoca(\AppBundle\Entity\Epoca $epoca = null)
    {
        $this->Epoca = $epoca;
    
        return $this;
    }

    /**
     * Get epoca
     *
     * @return \AppBundle\Entity\Epoca
     */
    public function getEpoca()
    {
        return $this->Epoca;
    }
}
