<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CollectionId
 * @property float $FaceMatchThreshold
 */
class FaceSearchSettings extends Shape
{
    /**
     * @param array{
     *     CollectionId?: string,
     *     FaceMatchThreshold?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
