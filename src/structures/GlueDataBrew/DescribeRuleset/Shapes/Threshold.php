<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeRuleset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Value
 * @property 'GREATER_THAN_OR_EQUAL'|'LESS_THAN_OR_EQUAL'|'GREATER_THAN'|'LESS_THAN'|null $Type
 * @property 'COUNT'|'PERCENTAGE'|null $Unit
 */
class Threshold extends Shape
{
    /**
     * @param array{
     *     Value: double,
     *     Type?: 'GREATER_THAN_OR_EQUAL'|'LESS_THAN_OR_EQUAL'|'GREATER_THAN'|'LESS_THAN'|null,
     *     Unit?: 'COUNT'|'PERCENTAGE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
