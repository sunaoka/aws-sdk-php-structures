<?php

namespace Sunaoka\Aws\Structures\Rekognition\CompareFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoundingBox $BoundingBox
 * @property float $Confidence
 */
class ComparedSourceImageFace extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: BoundingBox,
     *     Confidence?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
