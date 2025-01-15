<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Description
 * @property string|null $EndpointId
 * @property string|null $EndpointUrl
 * @property list<AwsEventsEndpointEventBusesDetails>|null $EventBuses
 * @property string|null $Name
 * @property AwsEventsEndpointReplicationConfigDetails|null $ReplicationConfig
 * @property string|null $RoleArn
 * @property AwsEventsEndpointRoutingConfigDetails|null $RoutingConfig
 * @property string|null $State
 * @property string|null $StateReason
 */
class AwsEventsEndpointDetails extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Description?: string|null,
     *     EndpointId?: string|null,
     *     EndpointUrl?: string|null,
     *     EventBuses?: list<AwsEventsEndpointEventBusesDetails>|null,
     *     Name?: string|null,
     *     ReplicationConfig?: AwsEventsEndpointReplicationConfigDetails|null,
     *     RoleArn?: string|null,
     *     RoutingConfig?: AwsEventsEndpointRoutingConfigDetails|null,
     *     State?: string|null,
     *     StateReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
