<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $channelName
 * @property ChannelStorageSummary|null $channelStorage
 * @property 'CREATING'|'ACTIVE'|'DELETING'|null $status
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property \Aws\Api\DateTimeResult|null $lastMessageArrivalTime
 */
class ChannelSummary extends Shape
{
    /**
     * @param array{
     *     channelName?: string|null,
     *     channelStorage?: ChannelStorageSummary|null,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     lastMessageArrivalTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
