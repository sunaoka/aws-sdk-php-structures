<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Height
 * @property double $LeftOffset
 * @property double $TopOffset
 * @property double $Width
 */
class CaptionRectangle extends Shape
{
    /**
     * @param array{
     *     Height: double,
     *     LeftOffset: double,
     *     TopOffset: double,
     *     Width: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
