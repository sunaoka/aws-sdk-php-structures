<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CollectionId
 * @property float|null $FaceMatchThreshold
 */
class FaceSearchSettings extends Shape
{
    /**
     * @param array{
     *     CollectionId?: string|null,
     *     FaceMatchThreshold?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
