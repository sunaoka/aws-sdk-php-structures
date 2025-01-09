<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FOLLOW_IFRAME'|'FOLLOW_CUSTOM' $IntervalCadence
 * @property int<2, 4096> $ThumbnailHeight
 * @property double $ThumbnailInterval
 * @property int<8, 4096> $ThumbnailWidth
 * @property int<1, 2048> $TileHeight
 * @property int<1, 512> $TileWidth
 */
class HlsImageBasedTrickPlaySettings extends Shape
{
    /**
     * @param array{
     *     IntervalCadence?: 'FOLLOW_IFRAME'|'FOLLOW_CUSTOM',
     *     ThumbnailHeight?: int<2, 4096>,
     *     ThumbnailInterval?: double,
     *     ThumbnailWidth?: int<8, 4096>,
     *     TileHeight?: int<1, 2048>,
     *     TileWidth?: int<1, 512>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
