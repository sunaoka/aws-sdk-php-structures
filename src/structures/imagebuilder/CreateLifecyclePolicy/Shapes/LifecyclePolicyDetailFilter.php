<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AGE'|'COUNT' $type
 * @property int $value
 * @property 'DAYS'|'WEEKS'|'MONTHS'|'YEARS' $unit
 * @property int $retainAtLeast
 */
class LifecyclePolicyDetailFilter extends Shape
{
    /**
     * @param array{
     *     type: 'AGE'|'COUNT',
     *     value: int,
     *     unit?: 'DAYS'|'WEEKS'|'MONTHS'|'YEARS',
     *     retainAtLeast?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
