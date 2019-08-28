<?php

namespace FilippoToso\Travelport\Util;

class FareType
{

    /**
     * @var typeFareTypeCode $Code
     */
    protected $Code = null;

    /**
     * @param typeFareTypeCode $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return typeFareTypeCode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeFareTypeCode $Code
     * @return \FilippoToso\Travelport\Util\FareType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
