<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity 
 * @ORM\Table(name="Escalao")
 * @UniqueEntity(
 *      fields={"Nome", "Modalidades", "Epoca"},
 *      message="O escalão já se encontra registado."
 * )
 **/
class Escalao
{

    /** 
     * @ORM\Id 
     * @ORM\Column(name="ID_Escalao", type="integer") 
     * @ORM\GeneratedValue 
     **/
    protected $ID_escalao;

    /**
     * @ORM\Column(name="Nome", type="string")
     * @Assert\NotNull(
     *     message = "Campo obrigatório!"
     * )
     * @Assert\Regex(
     *     pattern     = "/^[a-zàáãâéêíóõôúç ]+$/i",
     *     htmlPattern = "^[a-zA-Zàáãâéêíóõôúç ]+$",
     *     message="O campo Escalão só pode conter letras."
     * )
     * @Assert\Length(
     *      min = 3,
     *      max = 20,
     *      minMessage = "O campo Escalão tem que ter pelo menos {{ limit }} caracteres.",
     *      maxMessage = "O campo Escalão não pode ter mais de {{ limit }} caracteres."
     * )
     **/
    protected $Nome;

    /**
     * @ORM\ManyToOne(targetEntity="Modalidade")
     * @ORM\JoinColumn(name="ID_Modalidade", referencedColumnName="ID_Modalidade")
     **/
    protected $Modalidades;

    /**
     * @ORM\ManyToOne(targetEntity="Epoca")
     * @ORM\JoinColumn(name="REF_Epoca", referencedColumnName="ID_epoca")
     **/
    protected $Epoca;

    /**
     * @ORM\Column(name="DataInicial", type="date")
     * @Assert\NotNull(
     *     message = "Campo obrigatório!"
     * )
     * @Assert\Date(
     *   message = "Data inválida!"
     * )
     **/
    protected $DataInicial;

    /**
     * @ORM\Column(name="DataFinal", type="date")
     * @Assert\NotNull(
     *     message = "Campo obrigatório!"
     * )
     * @Assert\Date(
     *   message = "Data inválida!"
     * )
     **/
    protected $DataFinal;



    /**
     * @ORM\Column(name="EquipamentoNrMinimo", type="integer")
     * @Assert\NotNull(
     *     message = "Campo obrigatório!"
     * )
     **/
    protected $EquipamentoNrMinimo;

    /**
     * @ORM\Column(name="EquipamentoNrMaximo", type="integer")
     * @Assert\NotNull(
     *     message = "Campo obrigatório!"
     * )
     **/
    protected $EquipamentoNrMaximo;

    /**
     * @ORM\ManyToMany(targetEntity="Entidade", mappedBy="Modalidades")
     */
    protected $EscaloesResp;



    /**
     * Get iDEscalao
     *
     * @return integer
     */
    public function getIDEscalao()
    {
        return $this->ID_escalao;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Escalao
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
     * Set dataInicial
     *
     * @param \DateTime $dataInicial
     *
     * @return Escalao
     */
    public function setDataInicial($dataInicial)
    {
        $this->DataInicial = $dataInicial;

        return $this;
    }

    /**
     * Get dataInicial
     *
     * @return \DateTime
     */
    public function getDataInicial()
    {
        return $this->DataInicial;
    }

    /**
     * Set dataFinal
     *
     * @param \DateTime $dataFinal
     *
     * @return Escalao
     */
    public function setDataFinal($dataFinal)
    {
        $this->DataFinal = $dataFinal;

        return $this;
    }

    /**
     * Get dataFinal
     *
     * @return \DateTime
     */
    public function getDataFinal()
    {
        return $this->DataFinal;
    }

    /**
     * Set modalidades
     *
     * @param \AppBundle\Entity\Modalidade $modalidades
     *
     * @return Escalao
     */
    public function setModalidades(\AppBundle\Entity\Modalidade $modalidades = null)
    {
        $this->Modalidades = $modalidades;

        return $this;
    }

    /**
     * Get modalidades
     *
     * @return \AppBundle\Entity\Modalidade
     */
    public function getModalidades()
    {
        return $this->Modalidades;
    }

    /**
     * Set epoca
     *
     * @param \AppBundle\Entity\Epoca $epoca
     *
     * @return Escalao
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->EscaloesResp = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add escaloesResp
     *
     * @param \AppBundle\Entity\Entidade $escaloesResp
     *
     * @return Escalao
     */
    public function addEscaloesResp(\AppBundle\Entity\Entidade $escaloesResp)
    {
        $this->EscaloesResp[] = $escaloesResp;

        return $this;
    }

    /**
     * Remove escaloesResp
     *
     * @param \AppBundle\Entity\Entidade $escaloesResp
     */
    public function removeEscaloesResp(\AppBundle\Entity\Entidade $escaloesResp)
    {
        $this->EscaloesResp->removeElement($escaloesResp);
    }

    /**
     * Get escaloesResp
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEscaloesResp()
    {
        return $this->EscaloesResp;
    }

    /**
     * Set equipamentoNrMinimo
     *
     * @param integer $equipamentoNrMinimo
     *
     * @return Escalao
     */
    public function setEquipamentoNrMinimo($equipamentoNrMinimo)
    {
        $this->EquipamentoNrMinimo = $equipamentoNrMinimo;
    
        return $this;
    }

    /**
     * Get equipamentoNrMinimo
     *
     * @return integer
     */
    public function getEquipamentoNrMinimo()
    {
        return $this->EquipamentoNrMinimo;
    }

    /**
     * Set equipamentoNrMaximo
     *
     * @param integer $equipamentoNrMaximo
     *
     * @return Escalao
     */
    public function setEquipamentoNrMaximo($equipamentoNrMaximo)
    {
        $this->EquipamentoNrMaximo = $equipamentoNrMaximo;
    
        return $this;
    }

    /**
     * Get equipamentoNrMaximo
     *
     * @return integer
     */
    public function getEquipamentoNrMaximo()
    {
        return $this->EquipamentoNrMaximo;
    }
}
