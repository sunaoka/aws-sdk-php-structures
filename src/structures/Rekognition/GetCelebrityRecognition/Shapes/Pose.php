<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetCelebrityRecognition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Roll
 * @property float $Yaw
 * @property float $Pitch
 */
class Pose extends Shape
{
    /**
     * @param array{
     *     Roll?: float,
     *     Yaw?: float,
     *     Pitch?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
