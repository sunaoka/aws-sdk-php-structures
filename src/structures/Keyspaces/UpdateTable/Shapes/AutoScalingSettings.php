<?php

namespace Sunaoka\Aws\Structures\Keyspaces\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $autoScalingDisabled
 * @property int<1, max> $minimumUnits
 * @property int<1, max> $maximumUnits
 * @property AutoScalingPolicy $scalingPolicy
 */
class AutoScalingSettings extends Shape
{
    /**
     * @param array{
     *     autoScalingDisabled?: bool,
     *     minimumUnits?: int<1, max>,
     *     maximumUnits?: int<1, max>,
     *     scalingPolicy?: AutoScalingPolicy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
