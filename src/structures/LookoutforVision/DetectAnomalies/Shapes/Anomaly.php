<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DetectAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property PixelAnomaly|null $PixelAnomaly
 */
class Anomaly extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     PixelAnomaly?: PixelAnomaly|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
