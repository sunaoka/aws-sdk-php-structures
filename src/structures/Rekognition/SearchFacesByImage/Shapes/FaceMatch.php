<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchFacesByImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Similarity
 * @property Face $Face
 */
class FaceMatch extends Shape
{
    /**
     * @param array{
     *     Similarity?: float,
     *     Face?: Face
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
