<?php

namespace Sunaoka\Aws\Structures\Rekognition\CompareFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoundingBox|null $BoundingBox
 * @property float|null $Confidence
 */
class ComparedSourceImageFace extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: BoundingBox|null,
     *     Confidence?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
