<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelName
 * @property string $ChannelARN
 * @property string $ChannelId
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED' $ChannelStatus
 * @property string|null $ChannelStatusReason
 * @property \Aws\Api\DateTimeResult $ChannelCreationTimestamp
 * @property 'S3'|'S3_TABLES' $ChannelDestinationType
 * @property list<ChannelStreamIdentifier> $Streams
 */
class ChannelSummary extends Shape
{
    /**
     * @param array{
     *     ChannelName: string,
     *     ChannelARN: string,
     *     ChannelId: string,
     *     ChannelStatus: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED',
     *     ChannelStatusReason?: string|null,
     *     ChannelCreationTimestamp: \Aws\Api\DateTimeResult,
     *     ChannelDestinationType: 'S3'|'S3_TABLES',
     *     Streams: list<ChannelStreamIdentifier>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
