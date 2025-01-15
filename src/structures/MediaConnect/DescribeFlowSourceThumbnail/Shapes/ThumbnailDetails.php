<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceThumbnail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FlowArn
 * @property string|null $Thumbnail
 * @property list<MessageDetail> $ThumbnailMessages
 * @property string|null $Timecode
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 */
class ThumbnailDetails extends Shape
{
    /**
     * @param array{
     *     FlowArn: string,
     *     Thumbnail?: string|null,
     *     ThumbnailMessages: list<MessageDetail>,
     *     Timecode?: string|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
