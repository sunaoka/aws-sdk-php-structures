<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Height
 * @property float $Left
 * @property float $Top
 * @property float $Width
 */
class BoundingBox extends Shape
{
    /**
     * @param array{
     *     Height?: float,
     *     Left?: float,
     *     Top?: float,
     *     Width?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
