<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2147483647> $defaultTaskCount
 * @property int<0, 2147483647>|null $targetRuntimeSeconds
 * @property 'CONTIGUOUS'|'NONCONTIGUOUS' $rangeConstraint
 */
class StepParameterChunks extends Shape
{
    /**
     * @param array{
     *     defaultTaskCount: int<1, 2147483647>,
     *     targetRuntimeSeconds?: int<0, 2147483647>|null,
     *     rangeConstraint: 'CONTIGUOUS'|'NONCONTIGUOUS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
