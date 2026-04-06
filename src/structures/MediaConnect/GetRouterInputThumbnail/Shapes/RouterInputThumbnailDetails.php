<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterInputThumbnail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouterInputMessage> $ThumbnailMessages
 * @property \Psr\Http\Message\StreamInterface|null $Thumbnail
 * @property string|null $Timecode
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 */
class RouterInputThumbnailDetails extends Shape
{
    /**
     * @param array{
     *     ThumbnailMessages: list<RouterInputMessage>,
     *     Thumbnail?: \Psr\Http\Message\StreamInterface|null,
     *     Timecode?: string|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
