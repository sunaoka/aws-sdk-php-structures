<?php

namespace Sunaoka\Aws\Structures\Keyspaces\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $autoScalingDisabled
 * @property int $minimumUnits
 * @property int $maximumUnits
 * @property AutoScalingPolicy $scalingPolicy
 */
class AutoScalingSettings extends Shape
{
    /**
     * @param array{
     *     autoScalingDisabled?: bool,
     *     minimumUnits?: int,
     *     maximumUnits?: int,
     *     scalingPolicy?: AutoScalingPolicy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
