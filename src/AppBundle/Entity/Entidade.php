<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
* @ORM\Entity
* @ORM\Table(name="Entidade")
* @UniqueEntity(
*      fields={"nLicenca"},
*      message="O número de licença já se encontra registado."
* )
**/
class Entidade
{
	/**
	* @ORM\Id
	* @ORM\Column(name="ID_Entidade", type="integer")
	* @ORM\GeneratedValue
	**/
	protected $ID_Entidade;

	/**
	* @ORM\Column(name="nLicenca", type="string", nullable=true)
    * @Assert\Regex(
    *     pattern     = "/^[0-9]+$/i",
    *     htmlPattern = "^[0-9]+$",
    *     message="O campo Número de Licença é numérico."
    * )
    * @Assert\Length(
    *      min = 5,
    *      max = 13,
    *      exactMessage = "O campo Número de Licença tem que ter {{ limit }} caracteres."
    * )
	**/
	protected $nLicenca;

    /**
    * @ORM\Column(name="Nome", type="string")
    * @Assert\NotNull(
    *     message = "O campo Nome é obrigatório!"
    * )
    * @Assert\Length(
    *      min = 3,
    *      max = 70,
    *      minMessage = "O campo Nome tem que ter pelo menos {{ limit }} caracteres.",
    *      maxMessage = "O campo Nome não pode ter mais de {{ limit }} caracteres."
    * )
    **/
    protected $Nome;

    /**
    * @ORM\ManyToOne(targetEntity="TipoEntidade")
    * @ORM\JoinColumn(name="REF_TipoEnt", referencedColumnName="ID_tipoentidade")
    **/
    protected $TipoEnt;

    /**
    * @ORM\Column(name="Estado", type="boolean")
    **/
    protected $Estado;

    /**
    * @ORM\ManyToOne(targetEntity="Equipamento")
    * @ORM\JoinColumn(name="REF_Equipamento", referencedColumnName="ID_equipamento", onDelete="CASCADE")
    **/
    protected $Equipamento;

    /**
    * @ORM\ManyToOne(targetEntity="Posicao")
    * @ORM\JoinColumn(name="REF_Posicao", referencedColumnName="ID_Posicao")
    **/
    protected $PosicaoPreferida;

    /**
    * @ORM\ManyToOne(targetEntity="Morada")
    * @ORM\JoinColumn(name="REF_Morada", referencedColumnName="ID_Morada")
    **/
    protected $Morada;

    /**
    * @ORM\Column(name="Telf", type="string", nullable=true)
    * @Assert\Length(
    *     max = 50,
    *     maxMessage = "O campo Telefone não pode ter mais de {{ limit }} caracteres."
    * )
    **/
    protected $Telf;

    /**
    * @ORM\Column(name="Telm", type="string", nullable=true)
    * @Assert\Length(
    *     max = 50,
    *     maxMessage = "O campo Telemóvel não pode ter mais de {{ limit }} caracteres."
    * )
    **/
    protected $Telm;

    /**
    * @ORM\Column(name="Email", type="string", nullable=true)
    * @Assert\Email(
    *     message = "O email '{{ value }}' não é um email válido.",
    *     checkMX = true
    * )
    **/
    protected $Email;

    /**
    * @ORM\Column(name="DataNasc", type="date", nullable=true)
    * @Assert\Date(
    *   message = "Data inválida!"
    * )
    * @Assert\LessThan(
    *       value="today",
    *       message="A Data de Nascimento tem de ser inferior à data atual."
    *   )
    **/
    protected $DataNasc;

    /**
    * @ORM\Column(name="Naturalidade", type="string", nullable=true)
    * @Assert\Regex(
    *     pattern     = "/^[a-zàáãâéêíóõôúç ]+$/i",
    *     htmlPattern = "^[a-zA-Zàáãâéêíóõôúç ]+$",
    *     message="O campo Naturalidade só pode conter letras."
    * )
    * @Assert\Length(
    *      max = 50,
    *      maxMessage = "O campo Naturalidade não pode ter mais de {{ limit }} caracteres."
    * )
    **/
    protected $Naturalidade;

    /**
    * @ORM\Column(name="Pais", type="string", nullable=true)
    * @Assert\Regex(
    *     pattern     = "/^[a-zàáãâéêíóõôúç ]+$/i",
    *     htmlPattern = "^[a-zA-Zàáãâéêíóõôúç ]+$",
    *     message="O campo País só pode conter letras."
    * )
    * @Assert\Length(
    *      max = 50,
    *      maxMessage = "O campo País não pode ter mais de {{ limit }} caracteres."
    * )
    **/
    protected $Pais;

    /**
    * @ORM\Column(name="CC", type="string")
    **/
    protected $CC;

    /**
    * @ORM\Column(name="NIF", type="string")
    **/
    protected $NIF;

    /**
    * @ORM\Column(name="GSanguineo", type="string", nullable=true)
    **/
    protected $GSanguineo;

    /**
    * @ORM\Column(name="Habilitacoes", type="string", nullable=true)
    * @Assert\Length(
    *      max = 70,
    *      maxMessage = "O campo Habilitações não pode ter mais de {{ limit }} caracteres."
    * )
    **/
    protected $Habilitacoes;

    /**
    * @ORM\Column(name="Doencas", type="string", nullable=true)
    * @Assert\Length(
    *      max = 150,
    *      maxMessage = "O campo Doenças não pode ter mais de {{ limit }} caracteres."
    * )
    **/
    protected $Doencas;

    /**
    * @ORM\Column(name="Profissao", type="string", nullable=true)
    * @Assert\Length(
    *      max = 70,
    *      maxMessage = "O campo Profissão não pode ter mais de {{ limit }} caracteres."
    * )
    **/
    protected $Profissao;

     /**
    * @ORM\Column(name="UltimaAtualizacao", type="date", nullable=true)
    * @Assert\Date(
    *   message = "Data de Atualização inválida!"
    * )
    **/
    protected $UltimaAtualizacao;

    /**
    * @ORM\Column(name="FotoInscricao", type="string", nullable=true)
    **/
    protected $FotoInscricao;

    /**
    * @ORM\ManyToOne(targetEntity="DadosInscricao")
    * @ORM\JoinColumn(name="REF_Inscricao", referencedColumnName="ID_dadosInscricao")
    **/
    protected $Inscricao;

    /**
    * @ORM\Column(name="FotoCromos", type="string", nullable=true)
    **/
    protected $FotoCromos;

    /**
     * @ORM\ManyToMany(targetEntity="Modalidade", inversedBy="entidadesM")
     * @ORM\JoinTable(name="Entidade_Modalidade",
     *      joinColumns={@ORM\JoinColumn(name="ID_Entidade", referencedColumnName="ID_Entidade")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="ID_Modalidade", referencedColumnName="ID_Modalidade")}
     *      )
    **/
    protected $Modalidades;


    /**
     * @ORM\OneToMany(targetEntity="EquipaJogo", mappedBy="Entidade")
     */
    protected $EquipasJogo;

    /**
    * @ORM\OneToMany(targetEntity="JogadorEstatistica", mappedBy="Entidade")
    */
    protected $JogadorStats;

    /**
     * @ORM\ManyToMany(targetEntity="Escalao", inversedBy="entidadesResp")
     * @ORM\JoinTable(name="EntidadeResp_Escalao",
     *      joinColumns={@ORM\JoinColumn(name="ID_Entidade", referencedColumnName="ID_Entidade")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="ID_Escalao", referencedColumnName="ID_Escalao")}
     *      )
    **/
    protected $EscaloesResp;


		/**
    * @ORM\OneToMany(targetEntity="DocumentoEntidade", mappedBy="entidade")
    */
		protected $documentos;


		/**
    * @ORM\OneToMany(targetEntity="ModoPagamentoEntidade", mappedBy="Entidade")
    */
		protected $modosPagamentoEntidade;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Modalidades = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get iDEntidade
     *
     * @return integer
     */
    public function getIDEntidade()
    {
        return $this->ID_Entidade;
    }

    /**
     * Set nLicenca
     *
     * @param string $nLicenca
     *
     * @return Entidade
     */
    public function setNLicenca($nLicenca)
    {
        $this->nLicenca = $nLicenca;

        return $this;
    }

    /**
     * Get nLicenca
     *
     * @return string
     */
    public function getNLicenca()
    {
        return $this->nLicenca;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Entidade
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
     * Set telf
     *
     * @param string $telf
     *
     * @return Entidade
     */
    public function setTelf($telf)
    {
        $this->Telf = $telf;

        return $this;
    }

    /**
     * Get telf
     *
     * @return string
     */
    public function getTelf()
    {
        return $this->Telf;
    }

    /**
     * Set telm
     *
     * @param string $telm
     *
     * @return Entidade
     */
    public function setTelm($telm)
    {
        $this->Telm = $telm;

        return $this;
    }

    /**
     * Get telm
     *
     * @return string
     */
    public function getTelm()
    {
        return $this->Telm;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Entidade
     */
    public function setEmail($email)
    {
        $this->Email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set dataNasc
     *
     * @param \DateTime $dataNasc
     *
     * @return Entidade
     */
    public function setDataNasc($dataNasc)
    {
        $this->DataNasc = $dataNasc;

        return $this;
    }

    /**
     * Get dataNasc
     *
     * @return \DateTime
     */
    public function getDataNasc()
    {
        return $this->DataNasc;
    }

    /**
     * Set naturalidade
     *
     * @param string $naturalidade
     *
     * @return Entidade
     */
    public function setNaturalidade($naturalidade)
    {
        $this->Naturalidade = $naturalidade;

        return $this;
    }

    /**
     * Get naturalidade
     *
     * @return string
     */
    public function getNaturalidade()
    {
        return $this->Naturalidade;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Entidade
     */
    public function setPais($pais)
    {
        $this->Pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->Pais;
    }

    /**
     * Set cC
     *
     * @param string $cC
     *
     * @return Entidade
     */
    public function setCC($cC)
    {
        $this->CC = $cC;

        return $this;
    }

    /**
     * Get cC
     *
     * @return string
     */
    public function getCC()
    {
        return $this->CC;
    }

    /**
     * Set nIF
     *
     * @param string $nIF
     *
     * @return Entidade
     */
    public function setNIF($nIF)
    {
        $this->NIF = $nIF;

        return $this;
    }

    /**
     * Get nIF
     *
     * @return string
     */
    public function getNIF()
    {
        return $this->NIF;
    }

    /**
     * Set gSanguineo
     *
     * @param string $gSanguineo
     *
     * @return Entidade
     */
    public function setGSanguineo($gSanguineo)
    {
        $this->GSanguineo = $gSanguineo;

        return $this;
    }

    /**
     * Get gSanguineo
     *
     * @return string
     */
    public function getGSanguineo()
    {
        return $this->GSanguineo;
    }

    /**
     * Set habilitacoes
     *
     * @param string $habilitacoes
     *
     * @return Entidade
     */
    public function setHabilitacoes($habilitacoes)
    {
        $this->Habilitacoes = $habilitacoes;

        return $this;
    }

    /**
     * Get habilitacoes
     *
     * @return string
     */
    public function getHabilitacoes()
    {
        return $this->Habilitacoes;
    }

    /**
     * Set doencas
     *
     * @param string $doencas
     *
     * @return Entidade
     */
    public function setDoencas($doencas)
    {
        $this->Doencas = $doencas;

        return $this;
    }

    /**
     * Get doencas
     *
     * @return string
     */
    public function getDoencas()
    {
        return $this->Doencas;
    }

    /**
     * Set profissao
     *
     * @param string $profissao
     *
     * @return Entidade
     */
    public function setProfissao($profissao)
    {
        $this->Profissao = $profissao;

        return $this;
    }

    /**
     * Get profissao
     *
     * @return string
     */
    public function getProfissao()
    {
        return $this->Profissao;
    }

    /**
     * Set ultimaAtualizacao
     *
     * @param \DateTime $ultimaAtualizacao
     *
     * @return Entidade
     */
    public function setUltimaAtualizacao($ultimaAtualizacao)
    {
        $this->UltimaAtualizacao = $ultimaAtualizacao;

        return $this;
    }

    /**
     * Get ultimaAtualizacao
     *
     * @return \DateTime
     */
    public function getUltimaAtualizacao()
    {
        return $this->UltimaAtualizacao;
    }

    /**
     * Set fotoInscricao
     *
     * @param string $fotoInscricao
     *
     * @return Entidade
     */
    public function setFotoInscricao($fotoInscricao)
    {
        $this->FotoInscricao = $fotoInscricao;

        return $this;
    }

    /**
     * Get fotoInscricao
     *
     * @return string
     */
    public function getFotoInscricao()
    {
        return $this->FotoInscricao;
    }

    /**
     * Set fotoCromos
     *
     * @param string $fotoCromos
     *
     * @return Entidade
     */
    public function setFotoCromos($fotoCromos)
    {
        $this->FotoCromos = $fotoCromos;

        return $this;
    }

    /**
     * Get fotoCromos
     *
     * @return string
     */
    public function getFotoCromos()
    {
        return $this->FotoCromos;
    }

    /**
     * Set tipoEnt
     *
     * @param \AppBundle\Entity\TipoEntidade $tipoEnt
     *
     * @return Entidade
     */
    public function setTipoEnt(\AppBundle\Entity\TipoEntidade $tipoEnt = null)
    {
        $this->TipoEnt = $tipoEnt;

        return $this;
    }

    /**
     * Get tipoEnt
     *
     * @return \AppBundle\Entity\TipoEntidade
     */
    public function getTipoEnt()
    {
        return $this->TipoEnt;
    }

    /**
     * Set equipamento
     *
     * @param \AppBundle\Entity\Equipamento $equipamento
     *
     * @return Entidade
     */
    public function setEquipamento(\AppBundle\Entity\Equipamento $equipamento = null)
    {
        $this->Equipamento = $equipamento;

        return $this;
    }

    /**
     * Get equipamento
     *
     * @return \AppBundle\Entity\Equipamento
     */
    public function getEquipamento()
    {
        return $this->Equipamento;
    }

    /**
     * Set escalao
     *
     * @param \AppBundle\Entity\Escalao $escalao
     *
     * @return Entidade
     */
    public function setEscalao(\AppBundle\Entity\Escalao $escalao = null)
    {
        $this->Escalao = $escalao;

        return $this;
    }

    /**
     * Get escalao
     *
     * @return \AppBundle\Entity\Escalao
     */
    public function getEscalao()
    {
        return $this->Escalao;
    }


    /**
     * Set morada
     *
     * @param \AppBundle\Entity\Morada $morada
     *
     * @return Entidade
     */
    public function setMorada(\AppBundle\Entity\Morada $morada = null)
    {
        $this->Morada = $morada;

        return $this;
    }

    /**
     * Get morada
     *
     * @return \AppBundle\Entity\Morada
     */
    public function getMorada()
    {
        return $this->Morada;
    }

    /**
     * Set inscricao
     *
     * @param \AppBundle\Entity\DadosInscricao $inscricao
     *
     * @return Entidade
     */
    public function setInscricao(\AppBundle\Entity\DadosInscricao $inscricao = null)
    {
        $this->Inscricao = $inscricao;

        return $this;
    }

    /**
     * Get inscricao
     *
     * @return \AppBundle\Entity\DadosInscricao
     */
    public function getInscricao()
    {
        return $this->Inscricao;
    }

    /**
     * Add modalidade
     *
     * @param \AppBundle\Entity\Modalidade $modalidade
     *
     * @return Entidade
     */
    public function addModalidade(\AppBundle\Entity\Modalidade $modalidade)
    {
        $this->Modalidades[] = $modalidade;

        return $this;
    }

    /**
     * Remove modalidade
     *
     * @param \AppBundle\Entity\Modalidade $modalidade
     */
    public function removeModalidade(\AppBundle\Entity\Modalidade $modalidade)
    {
        $this->Modalidades->removeElement($modalidade);
    }

    /**
     * Get modalidades
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModalidades()
    {
        return $this->Modalidades;
    }

    /**
     * Add equipasJogo
     *
     * @param \AppBundle\Entity\EquipaJogo $equipasJogo
     *
     * @return Entidade
     */
    public function addEquipasJogo(\AppBundle\Entity\EquipaJogo $equipasJogo)
    {
        $this->EquipasJogo[] = $equipasJogo;

        return $this;
    }

    /**
     * Remove equipasJogo
     *
     * @param \AppBundle\Entity\EquipaJogo $equipasJogo
     */
    public function removeEquipasJogo(\AppBundle\Entity\EquipaJogo $equipasJogo)
    {
        $this->EquipasJogo->removeElement($equipasJogo);
    }

    /**
     * Get equipasJogo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEquipasJogo()
    {
        return $this->EquipasJogo;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     *
     * @return Entidade
     */
    public function setEstado($estado)
    {
        $this->Estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * Set posicaoPreferida
     *
     * @param \AppBundle\Entity\Posicao $posicaoPreferida
     *
     * @return Entidade
     */
    public function setPosicaoPreferida(\AppBundle\Entity\Posicao $posicaoPreferida = null)
    {
        $this->PosicaoPreferida = $posicaoPreferida;

        return $this;
    }

    /**
     * Get posicaoPreferida
     *
     * @return \AppBundle\Entity\Posicao
     */
    public function getPosicaoPreferida()
    {
        return $this->PosicaoPreferida;
    }

    /**
     * Add escaloesResp
     *
     * @param \AppBundle\Entity\Escalao $escaloesResp
     *
     * @return Entidade
     */
    public function addEscaloesResp(\AppBundle\Entity\Escalao $escaloesResp)
    {
        $this->EscaloesResp[] = $escaloesResp;

        return $this;
    }

    /**
     * Remove escaloesResp
     *
     * @param \AppBundle\Entity\Escalao $escaloesResp
     */
    public function removeEscaloesResp(\AppBundle\Entity\Escalao $escaloesResp)
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
     * Add jogadorEstatistica
     *
     * @param \AppBundle\Entity\JogadorEstatistica $jogadorEstatistica
     *
     * @return Entidade
     */
    public function addJogadorEstatistica(\AppBundle\Entity\JogadorEstatistica $jogadorEstatistica)
    {
        $this->JogadorEstatistica[] = $jogadorEstatistica;

        return $this;
    }

    /**
     * Remove jogadorEstatistica
     *
     * @param \AppBundle\Entity\JogadorEstatistica $jogadorEstatistica
     */
    public function removeJogadorEstatistica(\AppBundle\Entity\JogadorEstatistica $jogadorEstatistica)
    {
        $this->JogadorEstatistica->removeElement($jogadorEstatistica);
    }

    /**
     * Get jogadorEstatistica
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJogadorEstatistica()
    {
        return $this->JogadorEstatistica;
    }

    /**
     * Add jogadorStat
     *
     * @param \AppBundle\Entity\JogadorEstatistica $jogadorStat
     *
     * @return Entidade
     */
    public function addJogadorStat(\AppBundle\Entity\JogadorEstatistica $jogadorStat)
    {
        $this->JogadorStats[] = $jogadorStat;

        return $this;
    }

    /**
     * Remove jogadorStat
     *
     * @param \AppBundle\Entity\JogadorEstatistica $jogadorStat
     */
    public function removeJogadorStat(\AppBundle\Entity\JogadorEstatistica $jogadorStat)
    {
        $this->JogadorStats->removeElement($jogadorStat);
    }

    /**
     * Get jogadorStats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJogadorStats()
    {
        return $this->JogadorStats;
    }

		/**
     * Add documentoEntidade
     *
     * @param \AppBundle\Entity\DocumentoEntidade $documentoEntidade
     *
     * @return Entidade
     */
    public function addDocumento(\AppBundle\Entity\DocumentoEntidade $documentoEntidade)
    {
        $this->documentos[] = $documentoEntidade;

        return $this;
    }

    /**
     * Remove documentoEntidade
     *
     * @param \AppBundle\Entity\DocumentoEntidade $documentoEntidade
     */
    public function removeDocumento(\AppBundle\Entity\DocumentoEntidade $documentoEntidade)
    {
        $this->documentos->removeElement($documentoEntidade);
    }

    /**
     * Get documentos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocumentos()
    {
        return $this->documentos;
    }

		/**
		 * Add modoPagamentoEntidade
		 *
		 * @param \AppBundle\Entity\ModoPagamentoEntidade $mpe
		 *
		 * @return Entidade
		 */
		public function addModoPagamentoEntidade(\AppBundle\Entity\ModoPagamentoEntidade $mpe)
		{
				$this->modosPagamentoEntidade[] = $mpe;

				return $this;
		}

		/**
		 * Remove modoPagamentoEntidade
		 *
		 * @param \AppBundle\Entity\ModoPagamentoEntidade $mpe
		 */
		public function removeModoPagamentoEntidade(\AppBundle\Entity\ModoPagamentoEntidade $mpe)
		{
				$this->modosPagamentoEntidade->removeElement($mpe);
		}

		/**
		 * Get modosPagamentoEntidade
		 *
		 * @return \Doctrine\Common\Collections\Collection
		 */
		public function getModosPagamentoEntidade()
		{
				return $this->modosPagamentoEntidade;
		}


}
