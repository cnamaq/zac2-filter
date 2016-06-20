<?php
/**
 *
 * @author Denis Fohl
 */
namespace Zac2\Filter\Multi;

use Zac2\Common\Field;

class Critere extends Field
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $operator;
    /**
     * @var string
     */
    protected $valueFrom;
    /**
     * @var bool
     */
    protected $readOnly;

    /**
     * @param array $params
     */
    public function __construct(array $params = array())
    {
        parent::__construct($params);
        $this->id        = (array_key_exists('id', $params))   ? $params['id'] : null;
        $this->operator  = (array_key_exists('operator', $params)) ? $params['operator'] : null;
        $this->valueFrom = (array_key_exists('valueFrom', $params)) ? $params['valueFrom'] : null;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    /**
     * @return string
     */
    public function getValueFrom()
    {
        return $this->valueFrom;
    }

    /**
     * @param string $valueFrom
     */
    public function setValueFrom($valueFrom)
    {
        $this->valueFrom = $valueFrom;
    }

    /**
     * @return boolean
     */
    public function isReadOnly()
    {
        return $this->readOnly;
    }

    /**
     * @param boolean $readOnly
     */
    public function setReadOnly($readOnly)
    {
        $this->readOnly = $readOnly;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}
