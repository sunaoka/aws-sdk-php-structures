<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $channelName
 * @property ChannelStorageSummary $channelStorage
 * @property 'CREATING'|'ACTIVE'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property \Aws\Api\DateTimeResult $lastMessageArrivalTime
 */
class ChannelSummary extends Shape
{
    /**
     * @param array{
     *     channelName?: string,
     *     channelStorage?: ChannelStorageSummary,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING',
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult,
     *     lastMessageArrivalTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
