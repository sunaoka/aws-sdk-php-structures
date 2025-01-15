<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeThumbnails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Body
 * @property string|null $ContentType
 * @property 'UNSPECIFIED'|'CURRENT_ACTIVE'|null $ThumbnailType
 * @property \Aws\Api\DateTimeResult|null $TimeStamp
 */
class Thumbnail extends Shape
{
    /**
     * @param array{
     *     Body?: string|null,
     *     ContentType?: string|null,
     *     ThumbnailType?: 'UNSPECIFIED'|'CURRENT_ACTIVE'|null,
     *     TimeStamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
