<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $TimeStamp
 * @property 'NO_MEDIA'|'MEDIA_ERROR' $Error
 * @property string $ImageContent
 */
class Image extends Shape
{
    /**
     * @param array{
     *     TimeStamp?: \Aws\Api\DateTimeResult,
     *     Error?: 'NO_MEDIA'|'MEDIA_ERROR',
     *     ImageContent?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
