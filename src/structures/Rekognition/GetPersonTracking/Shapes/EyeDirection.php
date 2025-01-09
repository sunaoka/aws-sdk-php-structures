<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetPersonTracking\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Yaw
 * @property float $Pitch
 * @property float $Confidence
 */
class EyeDirection extends Shape
{
    /**
     * @param array{
     *     Yaw?: float,
     *     Pitch?: float,
     *     Confidence?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
