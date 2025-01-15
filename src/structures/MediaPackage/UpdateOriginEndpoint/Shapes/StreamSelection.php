<?php

namespace Sunaoka\Aws\Structures\MediaPackage\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MaxVideoBitsPerSecond
 * @property int|null $MinVideoBitsPerSecond
 * @property 'ORIGINAL'|'VIDEO_BITRATE_ASCENDING'|'VIDEO_BITRATE_DESCENDING'|null $StreamOrder
 */
class StreamSelection extends Shape
{
    /**
     * @param array{
     *     MaxVideoBitsPerSecond?: int|null,
     *     MinVideoBitsPerSecond?: int|null,
     *     StreamOrder?: 'ORIGINAL'|'VIDEO_BITRATE_ASCENDING'|'VIDEO_BITRATE_DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
