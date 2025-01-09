<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Description
 * @property string $EndpointId
 * @property string $EndpointUrl
 * @property list<AwsEventsEndpointEventBusesDetails> $EventBuses
 * @property string $Name
 * @property AwsEventsEndpointReplicationConfigDetails $ReplicationConfig
 * @property string $RoleArn
 * @property AwsEventsEndpointRoutingConfigDetails $RoutingConfig
 * @property string $State
 * @property string $StateReason
 */
class AwsEventsEndpointDetails extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Description?: string,
     *     EndpointId?: string,
     *     EndpointUrl?: string,
     *     EventBuses?: list<AwsEventsEndpointEventBusesDetails>,
     *     Name?: string,
     *     ReplicationConfig?: AwsEventsEndpointReplicationConfigDetails,
     *     RoleArn?: string,
     *     RoutingConfig?: AwsEventsEndpointRoutingConfigDetails,
     *     State?: string,
     *     StateReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
