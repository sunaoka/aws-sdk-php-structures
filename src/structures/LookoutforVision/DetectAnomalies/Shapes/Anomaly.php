<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DetectAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property PixelAnomaly $PixelAnomaly
 */
class Anomaly extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     PixelAnomaly?: PixelAnomaly
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
