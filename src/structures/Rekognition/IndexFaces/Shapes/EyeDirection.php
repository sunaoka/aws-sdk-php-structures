<?php

namespace Sunaoka\Aws\Structures\Rekognition\IndexFaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Yaw
 * @property float|null $Pitch
 * @property float|null $Confidence
 */
class EyeDirection extends Shape
{
    /**
     * @param array{
     *     Yaw?: float|null,
     *     Pitch?: float|null,
     *     Confidence?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
