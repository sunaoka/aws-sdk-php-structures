<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCisScanResultDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS' $comparison
 * @property 'LEVEL_1'|'LEVEL_2' $value
 */
class CisSecurityLevelFilter extends Shape
{
    /**
     * @param array{
     *     comparison: 'EQUALS',
     *     value: 'LEVEL_1'|'LEVEL_2'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
