<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceThumbnail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FlowArn
 * @property string $Thumbnail
 * @property list<MessageDetail> $ThumbnailMessages
 * @property string $Timecode
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class ThumbnailDetails extends Shape
{
    /**
     * @param array{
     *     FlowArn: string,
     *     Thumbnail?: string,
     *     ThumbnailMessages: list<MessageDetail>,
     *     Timecode?: string,
     *     Timestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
