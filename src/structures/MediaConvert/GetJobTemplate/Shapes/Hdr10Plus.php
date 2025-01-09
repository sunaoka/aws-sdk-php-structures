<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MasteringMonitorNits
 * @property int $TargetMonitorNits
 */
class Hdr10Plus extends Shape
{
    /**
     * @param array{
     *     MasteringMonitorNits?: int,
     *     TargetMonitorNits?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
