<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FOLLOW_IFRAME'|'FOLLOW_CUSTOM'|null $IntervalCadence
 * @property int<1, 4096>|null $ThumbnailHeight
 * @property double|null $ThumbnailInterval
 * @property int<8, 4096>|null $ThumbnailWidth
 * @property int<1, 2048>|null $TileHeight
 * @property int<1, 512>|null $TileWidth
 */
class DashIsoImageBasedTrickPlaySettings extends Shape
{
    /**
     * @param array{
     *     IntervalCadence?: 'FOLLOW_IFRAME'|'FOLLOW_CUSTOM'|null,
     *     ThumbnailHeight?: int<1, 4096>|null,
     *     ThumbnailInterval?: double|null,
     *     ThumbnailWidth?: int<8, 4096>|null,
     *     TileHeight?: int<1, 2048>|null,
     *     TileWidth?: int<1, 512>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
