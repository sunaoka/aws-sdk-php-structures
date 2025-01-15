<?php

namespace Sunaoka\Aws\Structures\Rekognition\RecognizeCelebrities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Roll
 * @property float|null $Yaw
 * @property float|null $Pitch
 */
class Pose extends Shape
{
    /**
     * @param array{
     *     Roll?: float|null,
     *     Yaw?: float|null,
     *     Pitch?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
