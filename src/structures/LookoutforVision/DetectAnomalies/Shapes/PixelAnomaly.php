<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DetectAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $TotalPercentageArea
 * @property string|null $Color
 */
class PixelAnomaly extends Shape
{
    /**
     * @param array{
     *     TotalPercentageArea?: float|null,
     *     Color?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
