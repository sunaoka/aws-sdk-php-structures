<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetPersonTracking\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Value
 * @property float $Confidence
 */
class Eyeglasses extends Shape
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
