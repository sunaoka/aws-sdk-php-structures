<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFlowLogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ClientToken
 * @property string $DeliverLogsPermissionArn
 * @property string $DeliverCrossAccountRole
 * @property string $LogGroupName
 * @property list<string> $ResourceIds
 * @property 'VPC'|'Subnet'|'NetworkInterface'|'TransitGateway'|'TransitGatewayAttachment' $ResourceType
 * @property 'ACCEPT'|'REJECT'|'ALL' $TrafficType
 * @property 'cloud-watch-logs'|'s3'|'kinesis-data-firehose' $LogDestinationType
 * @property string $LogDestination
 * @property string $LogFormat
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property int $MaxAggregationInterval
 * @property Shapes\DestinationOptionsRequest $DestinationOptions
 */
class CreateFlowLogsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ClientToken?: string,
     *     DeliverLogsPermissionArn?: string,
     *     DeliverCrossAccountRole?: string,
     *     LogGroupName?: string,
     *     ResourceIds: list<string>,
     *     ResourceType: 'VPC'|'Subnet'|'NetworkInterface'|'TransitGateway'|'TransitGatewayAttachment',
     *     TrafficType?: 'ACCEPT'|'REJECT'|'ALL',
     *     LogDestinationType?: 'cloud-watch-logs'|'s3'|'kinesis-data-firehose',
     *     LogDestination?: string,
     *     LogFormat?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     MaxAggregationInterval?: int,
     *     DestinationOptions?: Shapes\DestinationOptionsRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
