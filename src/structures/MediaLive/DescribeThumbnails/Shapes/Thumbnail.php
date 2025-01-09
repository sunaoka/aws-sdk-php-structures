<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeThumbnails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Body
 * @property string $ContentType
 * @property 'UNSPECIFIED'|'CURRENT_ACTIVE' $ThumbnailType
 * @property \Aws\Api\DateTimeResult $TimeStamp
 */
class Thumbnail extends Shape
{
    /**
     * @param array{
     *     Body?: string,
     *     ContentType?: string,
     *     ThumbnailType?: 'UNSPECIFIED'|'CURRENT_ACTIVE',
     *     TimeStamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
