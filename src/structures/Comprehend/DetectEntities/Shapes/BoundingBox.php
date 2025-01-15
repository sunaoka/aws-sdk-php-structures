<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Height
 * @property float|null $Left
 * @property float|null $Top
 * @property float|null $Width
 */
class BoundingBox extends Shape
{
    /**
     * @param array{
     *     Height?: float|null,
     *     Left?: float|null,
     *     Top?: float|null,
     *     Width?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
