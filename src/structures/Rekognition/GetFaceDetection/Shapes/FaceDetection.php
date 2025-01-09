<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Timestamp
 * @property FaceDetail $Face
 */
class FaceDetection extends Shape
{
    /**
     * @param array{
     *     Timestamp?: int,
     *     Face?: FaceDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
