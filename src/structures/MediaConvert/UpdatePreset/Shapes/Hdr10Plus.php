<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4000> $MasteringMonitorNits
 * @property int<0, 4000> $TargetMonitorNits
 */
class Hdr10Plus extends Shape
{
    /**
     * @param array{
     *     MasteringMonitorNits?: int<0, 4000>,
     *     TargetMonitorNits?: int<0, 4000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
