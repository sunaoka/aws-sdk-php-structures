<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DetectAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $TotalPercentageArea
 * @property string $Color
 */
class PixelAnomaly extends Shape
{
    /**
     * @param array{
     *     TotalPercentageArea?: float,
     *     Color?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
