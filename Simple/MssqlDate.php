<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Filter\Simple;


use Zac2\Common\FilterInterface;
use Zend\Db\Sql\Expression;

class MssqlDate implements FilterInterface
{

    public function filter($value)
    {
        // TODO preg_match format date FR
        return new Expression('convert(datetime, ?)', $value);
    }

}
