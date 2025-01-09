<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeRuleset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Value
 * @property 'GREATER_THAN_OR_EQUAL'|'LESS_THAN_OR_EQUAL'|'GREATER_THAN'|'LESS_THAN' $Type
 * @property 'COUNT'|'PERCENTAGE' $Unit
 */
class Threshold extends Shape
{
    /**
     * @param array{
     *     Value: double,
     *     Type?: 'GREATER_THAN_OR_EQUAL'|'LESS_THAN_OR_EQUAL'|'GREATER_THAN'|'LESS_THAN',
     *     Unit?: 'COUNT'|'PERCENTAGE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
