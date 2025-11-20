<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFlowLogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 * @property string|null $DeliverLogsPermissionArn
 * @property string|null $DeliverCrossAccountRole
 * @property string|null $LogGroupName
 * @property list<string> $ResourceIds
 * @property 'VPC'|'Subnet'|'NetworkInterface'|'TransitGateway'|'TransitGatewayAttachment'|'RegionalNatGateway' $ResourceType
 * @property 'ACCEPT'|'REJECT'|'ALL'|null $TrafficType
 * @property 'cloud-watch-logs'|'s3'|'kinesis-data-firehose'|null $LogDestinationType
 * @property string|null $LogDestination
 * @property string|null $LogFormat
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property int|null $MaxAggregationInterval
 * @property Shapes\DestinationOptionsRequest|null $DestinationOptions
 */
class CreateFlowLogsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ClientToken?: string|null,
     *     DeliverLogsPermissionArn?: string|null,
     *     DeliverCrossAccountRole?: string|null,
     *     LogGroupName?: string|null,
     *     ResourceIds: list<string>,
     *     ResourceType: 'VPC'|'Subnet'|'NetworkInterface'|'TransitGateway'|'TransitGatewayAttachment'|'RegionalNatGateway',
     *     TrafficType?: 'ACCEPT'|'REJECT'|'ALL'|null,
     *     LogDestinationType?: 'cloud-watch-logs'|'s3'|'kinesis-data-firehose'|null,
     *     LogDestination?: string|null,
     *     LogFormat?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     MaxAggregationInterval?: int|null,
     *     DestinationOptions?: Shapes\DestinationOptionsRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
