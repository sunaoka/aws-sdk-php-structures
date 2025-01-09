<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFlowLogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $DeliverLogsErrorMessage
 * @property string $DeliverLogsPermissionArn
 * @property string $DeliverCrossAccountRole
 * @property string $DeliverLogsStatus
 * @property string $FlowLogId
 * @property string $FlowLogStatus
 * @property string $LogGroupName
 * @property string $ResourceId
 * @property 'ACCEPT'|'REJECT'|'ALL' $TrafficType
 * @property 'cloud-watch-logs'|'s3'|'kinesis-data-firehose' $LogDestinationType
 * @property string $LogDestination
 * @property string $LogFormat
 * @property list<Tag> $Tags
 * @property int $MaxAggregationInterval
 * @property DestinationOptionsResponse $DestinationOptions
 */
class FlowLog extends Shape
{
    /**
     * @param array{
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     DeliverLogsErrorMessage?: string,
     *     DeliverLogsPermissionArn?: string,
     *     DeliverCrossAccountRole?: string,
     *     DeliverLogsStatus?: string,
     *     FlowLogId?: string,
     *     FlowLogStatus?: string,
     *     LogGroupName?: string,
     *     ResourceId?: string,
     *     TrafficType?: 'ACCEPT'|'REJECT'|'ALL',
     *     LogDestinationType?: 'cloud-watch-logs'|'s3'|'kinesis-data-firehose',
     *     LogDestination?: string,
     *     LogFormat?: string,
     *     Tags?: list<Tag>,
     *     MaxAggregationInterval?: int,
     *     DestinationOptions?: DestinationOptionsResponse
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
