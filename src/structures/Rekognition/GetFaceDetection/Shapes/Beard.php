<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Value
 * @property float $Confidence
 */
class Beard extends Shape
{
    /**
     * @param array{
     *     Value?: bool,
     *     Confidence?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
