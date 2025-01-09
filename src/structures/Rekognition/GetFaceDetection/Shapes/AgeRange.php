<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Low
 * @property int $High
 */
class AgeRange extends Shape
{
    /**
     * @param array{
     *     Low?: int,
     *     High?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
