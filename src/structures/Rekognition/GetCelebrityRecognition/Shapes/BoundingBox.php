<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetCelebrityRecognition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Width
 * @property float|null $Height
 * @property float|null $Left
 * @property float|null $Top
 */
class BoundingBox extends Shape
{
    /**
     * @param array{
     *     Width?: float|null,
     *     Height?: float|null,
     *     Left?: float|null,
     *     Top?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
