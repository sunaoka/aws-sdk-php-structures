<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListOriginEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxVideoBitsPerSecond
 * @property int $MinVideoBitsPerSecond
 * @property 'ORIGINAL'|'VIDEO_BITRATE_ASCENDING'|'VIDEO_BITRATE_DESCENDING' $StreamOrder
 */
class StreamSelection extends Shape
{
    /**
     * @param array{
     *     MaxVideoBitsPerSecond?: int,
     *     MinVideoBitsPerSecond?: int,
     *     StreamOrder?: 'ORIGINAL'|'VIDEO_BITRATE_ASCENDING'|'VIDEO_BITRATE_DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
