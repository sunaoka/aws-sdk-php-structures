<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $value
 * @property 'DAYS'|'WEEKS'|'MONTHS'|'YEARS' $unit
 */
class LifecyclePolicyDetailExclusionRulesAmisLastLaunched extends Shape
{
    /**
     * @param array{
     *     value: int,
     *     unit: 'DAYS'|'WEEKS'|'MONTHS'|'YEARS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
