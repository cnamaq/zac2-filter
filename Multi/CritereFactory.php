<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Filter\Multi;

use Zac2\Common\FilterInterface;

class CritereFactory
{

    /**
     * @param array $config
     * @return Critere
     */
    public static function create(array $config)
    {
        if (!isset($config['key'])) {
            $config['key'] = $config['id'];
        }
        if (!isset($config['valueFrom'])) {
            $config['valueFrom'] = $config['id'];
        }

        $critere = new Critere($config);
        if (isset($config['readonly'])) {
            $critere->setReadOnly((bool) $config['value']);
        }
        if (isset($config['value'])) {
            $critere->setValue($config['value']);
        }
        if (isset($config['inputFilter'])) {
            $critere->setInputFilter(self::createFilter($config['inputFilter']));
        }
        if (isset($config['outputFilter'])) {
            $critere->setOutputFilter(self::createFilter($config['outputFilter']));
        }

        return $critere;
    }

    /**
     * @param array $config
     * @return FilterInterface
     */
    protected static function createFilter(array $config)
    {
        $filterLst = array();
        foreach ($config as $filter) {
            $filterLst[] = new $filter;
        }

        return $filterLst;
    }

}
