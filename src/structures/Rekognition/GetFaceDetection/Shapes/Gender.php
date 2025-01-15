<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Male'|'Female'|null $Value
 * @property float|null $Confidence
 */
class Gender extends Shape
{
    /**
     * @param array{
     *     Value?: 'Male'|'Female'|null,
     *     Confidence?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
