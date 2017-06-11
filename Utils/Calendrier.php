<?php
/**
 * Created by IntelliJ IDEA.
 * User: Davvm
 * Date: 09/06/2017
 * Time: 14:33
 */

use Litipk\BigNumbers\Decimal;
require_once 'vendor/autoload.php';


class Calendrier
{

    private $immo;
    private $pro;
    private $conso;
    private $tauxEffectif;

    private $valueTest = 'valueTest';

    /**
     * @return mixed
     */
    public function getImmo()
    {
        return $this->immo;
    }

    /**
     */
    public function setImmo(int $immo)
    {
        $this->immo = $immo;
    }

    /**
     * @return mixed
     */
    public function getPro()
    {
        return $this->pro;
    }

    /**
     * @param mixed $pro
     */
    public function setPro(int $pro)
    {
        $this->pro = $pro;
    }

    /**
     * @return mixed
     */
    public function getConso()
    {
        return $this->conso;
    }

    /**
     * @param mixed $conso
     */
    public function setConso(int $conso)
    {
        $this->conso = $conso;
    }

    /**
     * @return mixed
     */
    public function getTauxEffectif()
    {
        return $this->tauxEffectif;
    }

    /**
     * @param mixed $tauxEffectif
     */
    public function setTauxEffectif($tauxEffectif)
    {
        $this->tauxEffectif = $tauxEffectif;
    }


    /**
     * @return string
     */
    public function quelTauxEffectif()
    {
        return "TEG";
    }

    /**
     * @return Decimal
     */
    public function quelTauxLegal()
    {
        $tauxLegal = Decimal::fromString('0.9');
	    return $tauxLegal;
	}

    /**
     * @return mixed
     */
    public function getValueTest()
    {
        return $this->valueTest;
    }

}