<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartTextDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $MinConfidence
 * @property float|null $MinBoundingBoxHeight
 * @property float|null $MinBoundingBoxWidth
 */
class DetectionFilter extends Shape
{
    /**
     * @param array{
     *     MinConfidence?: float|null,
     *     MinBoundingBoxHeight?: float|null,
     *     MinBoundingBoxWidth?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
