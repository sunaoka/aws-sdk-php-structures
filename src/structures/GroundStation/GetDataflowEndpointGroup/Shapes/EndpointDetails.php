<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsGroundStationAgentEndpoint|null $awsGroundStationAgentEndpoint
 * @property DataflowEndpoint|null $endpoint
 * @property list<'NO_REGISTERED_AGENT'|'INVALID_IP_OWNERSHIP'|'NOT_AUTHORIZED_TO_CREATE_SLR'|'UNVERIFIED_IP_OWNERSHIP'|'INITIALIZING_DATAPLANE'|'DATAPLANE_FAILURE'|'HEALTHY'>|null $healthReasons
 * @property 'HEALTHY'|'UNHEALTHY'|null $healthStatus
 * @property SecurityDetails|null $securityDetails
 */
class EndpointDetails extends Shape
{
    /**
     * @param array{
     *     awsGroundStationAgentEndpoint?: AwsGroundStationAgentEndpoint|null,
     *     endpoint?: DataflowEndpoint|null,
     *     healthReasons?: list<'NO_REGISTERED_AGENT'|'INVALID_IP_OWNERSHIP'|'NOT_AUTHORIZED_TO_CREATE_SLR'|'UNVERIFIED_IP_OWNERSHIP'|'INITIALIZING_DATAPLANE'|'DATAPLANE_FAILURE'|'HEALTHY'>|null,
     *     healthStatus?: 'HEALTHY'|'UNHEALTHY'|null,
     *     securityDetails?: SecurityDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
