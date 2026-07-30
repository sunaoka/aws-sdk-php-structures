<?php

namespace Sunaoka\Aws\Structures\Kafka\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChannelArn
 * @property string $ChannelName
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED'|'SUSPENDING'|'SUSPENDED' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'ICEBERG'|'S3' $DestinationType
 * @property string|null $ClusterOperationArn
 */
class ChannelInfo extends Shape
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     ChannelName: string,
     *     Status: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED'|'SUSPENDING'|'SUSPENDED',
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     DestinationType: 'ICEBERG'|'S3',
     *     ClusterOperationArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
