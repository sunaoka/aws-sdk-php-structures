<?php

namespace Sunaoka\Aws\Structures\Rekognition\IndexFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Face|null $Face
 * @property FaceDetail|null $FaceDetail
 */
class FaceRecord extends Shape
{
    /**
     * @param array{
     *     Face?: Face|null,
     *     FaceDetail?: FaceDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
