<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $TimeStamp
 * @property 'NO_MEDIA'|'MEDIA_ERROR'|null $Error
 * @property string|null $ImageContent
 */
class Image extends Shape
{
    /**
     * @param array{
     *     TimeStamp?: \Aws\Api\DateTimeResult|null,
     *     Error?: 'NO_MEDIA'|'MEDIA_ERROR'|null,
     *     ImageContent?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
