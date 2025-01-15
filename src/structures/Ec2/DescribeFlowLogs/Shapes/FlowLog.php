<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFlowLogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $DeliverLogsErrorMessage
 * @property string|null $DeliverLogsPermissionArn
 * @property string|null $DeliverCrossAccountRole
 * @property string|null $DeliverLogsStatus
 * @property string|null $FlowLogId
 * @property string|null $FlowLogStatus
 * @property string|null $LogGroupName
 * @property string|null $ResourceId
 * @property 'ACCEPT'|'REJECT'|'ALL'|null $TrafficType
 * @property 'cloud-watch-logs'|'s3'|'kinesis-data-firehose'|null $LogDestinationType
 * @property string|null $LogDestination
 * @property string|null $LogFormat
 * @property list<Tag>|null $Tags
 * @property int|null $MaxAggregationInterval
 * @property DestinationOptionsResponse|null $DestinationOptions
 */
class FlowLog extends Shape
{
    /**
     * @param array{
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     DeliverLogsErrorMessage?: string|null,
     *     DeliverLogsPermissionArn?: string|null,
     *     DeliverCrossAccountRole?: string|null,
     *     DeliverLogsStatus?: string|null,
     *     FlowLogId?: string|null,
     *     FlowLogStatus?: string|null,
     *     LogGroupName?: string|null,
     *     ResourceId?: string|null,
     *     TrafficType?: 'ACCEPT'|'REJECT'|'ALL'|null,
     *     LogDestinationType?: 'cloud-watch-logs'|'s3'|'kinesis-data-firehose'|null,
     *     LogDestination?: string|null,
     *     LogFormat?: string|null,
     *     Tags?: list<Tag>|null,
     *     MaxAggregationInterval?: int|null,
     *     DestinationOptions?: DestinationOptionsResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
