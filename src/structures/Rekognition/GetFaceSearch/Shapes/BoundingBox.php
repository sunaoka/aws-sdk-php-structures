<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Width
 * @property float $Height
 * @property float $Left
 * @property float $Top
 */
class BoundingBox extends Shape
{
    /**
     * @param array{
     *     Width?: float,
     *     Height?: float,
     *     Left?: float,
     *     Top?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
