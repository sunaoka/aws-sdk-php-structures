<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FOLLOW_IFRAME'|'FOLLOW_CUSTOM' $IntervalCadence
 * @property int $ThumbnailHeight
 * @property double $ThumbnailInterval
 * @property int $ThumbnailWidth
 * @property int $TileHeight
 * @property int $TileWidth
 */
class DashIsoImageBasedTrickPlaySettings extends Shape
{
    /**
     * @param array{
     *     IntervalCadence?: 'FOLLOW_IFRAME'|'FOLLOW_CUSTOM',
     *     ThumbnailHeight?: int,
     *     ThumbnailInterval?: double,
     *     ThumbnailWidth?: int,
     *     TileHeight?: int,
     *     TileWidth?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
