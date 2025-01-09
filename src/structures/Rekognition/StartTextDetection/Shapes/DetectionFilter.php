<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartTextDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $MinConfidence
 * @property float $MinBoundingBoxHeight
 * @property float $MinBoundingBoxWidth
 */
class DetectionFilter extends Shape
{
    /**
     * @param array{
     *     MinConfidence?: float,
     *     MinBoundingBoxHeight?: float,
     *     MinBoundingBoxWidth?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
