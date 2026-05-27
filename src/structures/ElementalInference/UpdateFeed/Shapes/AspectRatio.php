<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $width
 * @property int $height
 */
class AspectRatio extends Shape
{
    /**
     * @param array{
     *     width: int,
     *     height: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
