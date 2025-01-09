<?php

namespace Sunaoka\Aws\Structures\Rekognition\IndexFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Face $Face
 * @property FaceDetail $FaceDetail
 */
class FaceRecord extends Shape
{
    /**
     * @param array{
     *     Face?: Face,
     *     FaceDetail?: FaceDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
