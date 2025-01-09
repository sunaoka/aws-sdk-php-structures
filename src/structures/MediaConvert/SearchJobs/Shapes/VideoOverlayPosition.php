<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Height
 * @property 'PIXELS'|'PERCENTAGE' $Unit
 * @property int $Width
 * @property int $XPosition
 * @property int $YPosition
 */
class VideoOverlayPosition extends Shape
{
    /**
     * @param array{
     *     Height?: int,
     *     Unit?: 'PIXELS'|'PERCENTAGE',
     *     Width?: int,
     *     XPosition?: int,
     *     YPosition?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
