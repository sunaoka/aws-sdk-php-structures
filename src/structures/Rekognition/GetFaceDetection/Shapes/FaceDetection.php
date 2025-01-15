<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Timestamp
 * @property FaceDetail|null $Face
 */
class FaceDetection extends Shape
{
    /**
     * @param array{
     *     Timestamp?: int|null,
     *     Face?: FaceDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
