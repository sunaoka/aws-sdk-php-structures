<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Height
 * @property int $Width
 * @property int $X
 * @property int $Y
 */
class VideoPositionRectangle extends Shape
{
    /**
     * @param array{
     *     Height: int,
     *     Width: int,
     *     X: int,
     *     Y: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
