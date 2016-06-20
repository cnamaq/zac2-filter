<?php
/**
 * @author Denis Fohl
 */
namespace Zac2\Filter\Multi;

class MultiFactory
{

    /**
     * @param array $config
     * @return Multi
     */
    public function create(array $config)
    {
        $filtre = new Multi();

        if (isset($config['nom'])) {
            $filtre->setNom($config['nom']);
        }

        if (isset($config['critere'])) {
            $critereLst = array();
            foreach ($config['critere'] as $key => $critereConfig) {
                if (!isset($critereConfig['id'])) {
                    $critereConfig['id'] = $key;
                }
                $critere = CritereFactory::create($critereConfig);
                $critereLst[$key] = $critere;
            }
            $filtre->setCritereLst($critereLst);
        }

        return $filtre;
    }

}
