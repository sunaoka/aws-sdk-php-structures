<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SecurityDetails|null $securityDetails
 * @property DataflowEndpoint|null $endpoint
 * @property AwsGroundStationAgentEndpoint|null $awsGroundStationAgentEndpoint
 * @property 'HEALTHY'|'UNHEALTHY'|null $healthStatus
 * @property list<'NO_REGISTERED_AGENT'|'INVALID_IP_OWNERSHIP'|'NOT_AUTHORIZED_TO_CREATE_SLR'|'UNVERIFIED_IP_OWNERSHIP'|'INITIALIZING_DATAPLANE'|'DATAPLANE_FAILURE'|'HEALTHY'>|null $healthReasons
 */
class EndpointDetails extends Shape
{
    /**
     * @param array{
     *     securityDetails?: SecurityDetails|null,
     *     endpoint?: DataflowEndpoint|null,
     *     awsGroundStationAgentEndpoint?: AwsGroundStationAgentEndpoint|null,
     *     healthStatus?: 'HEALTHY'|'UNHEALTHY'|null,
     *     healthReasons?: list<'NO_REGISTERED_AGENT'|'INVALID_IP_OWNERSHIP'|'NOT_AUTHORIZED_TO_CREATE_SLR'|'UNVERIFIED_IP_OWNERSHIP'|'INITIALIZING_DATAPLANE'|'DATAPLANE_FAILURE'|'HEALTHY'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
