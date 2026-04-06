<?php

namespace Sunaoka\Aws\Structures\imagebuilder\StartResourceStateUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 365> $value
 * @property 'DAYS'|'WEEKS'|'MONTHS'|'YEARS' $unit
 */
class LifecyclePolicyDetailExclusionRulesAmisLastLaunched extends Shape
{
    /**
     * @param array{
     *     value: int<1, 365>,
     *     unit: 'DAYS'|'WEEKS'|'MONTHS'|'YEARS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
