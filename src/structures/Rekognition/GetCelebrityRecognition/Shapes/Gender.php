<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetCelebrityRecognition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Male'|'Female' $Value
 * @property float $Confidence
 */
class Gender extends Shape
{
    /**
     * @param array{
     *     Value?: 'Male'|'Female',
     *     Confidence?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
