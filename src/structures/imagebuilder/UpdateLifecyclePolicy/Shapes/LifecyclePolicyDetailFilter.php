<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AGE'|'COUNT' $type
 * @property int<1, 1000> $value
 * @property 'DAYS'|'WEEKS'|'MONTHS'|'YEARS' $unit
 * @property int<1, 10> $retainAtLeast
 */
class LifecyclePolicyDetailFilter extends Shape
{
    /**
     * @param array{
     *     type: 'AGE'|'COUNT',
     *     value: int<1, 1000>,
     *     unit?: 'DAYS'|'WEEKS'|'MONTHS'|'YEARS',
     *     retainAtLeast?: int<1, 10>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
