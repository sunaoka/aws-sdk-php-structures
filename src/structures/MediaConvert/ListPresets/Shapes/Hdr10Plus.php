<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4000>|null $MasteringMonitorNits
 * @property int<0, 4000>|null $TargetMonitorNits
 */
class Hdr10Plus extends Shape
{
    /**
     * @param array{
     *     MasteringMonitorNits?: int<0, 4000>|null,
     *     TargetMonitorNits?: int<0, 4000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
