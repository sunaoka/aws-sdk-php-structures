<?php

namespace Sunaoka\Aws\Structures\Keyspaces\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $autoScalingDisabled
 * @property int<1, max>|null $minimumUnits
 * @property int<1, max>|null $maximumUnits
 * @property AutoScalingPolicy|null $scalingPolicy
 */
class AutoScalingSettings extends Shape
{
    /**
     * @param array{
     *     autoScalingDisabled?: bool|null,
     *     minimumUnits?: int<1, max>|null,
     *     maximumUnits?: int<1, max>|null,
     *     scalingPolicy?: AutoScalingPolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
