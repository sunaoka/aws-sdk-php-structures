<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsGroundStationAgentEndpoint $awsGroundStationAgentEndpoint
 * @property DataflowEndpoint $endpoint
 * @property list<'NO_REGISTERED_AGENT'|'INVALID_IP_OWNERSHIP'|'NOT_AUTHORIZED_TO_CREATE_SLR'|'UNVERIFIED_IP_OWNERSHIP'|'INITIALIZING_DATAPLANE'|'DATAPLANE_FAILURE'|'HEALTHY'> $healthReasons
 * @property 'UNHEALTHY'|'HEALTHY' $healthStatus
 * @property SecurityDetails $securityDetails
 */
class EndpointDetails extends Shape
{
    /**
     * @param array{
     *     awsGroundStationAgentEndpoint?: AwsGroundStationAgentEndpoint,
     *     endpoint?: DataflowEndpoint,
     *     healthReasons?: list<'NO_REGISTERED_AGENT'|'INVALID_IP_OWNERSHIP'|'NOT_AUTHORIZED_TO_CREATE_SLR'|'UNVERIFIED_IP_OWNERSHIP'|'INITIALIZING_DATAPLANE'|'DATAPLANE_FAILURE'|'HEALTHY'>,
     *     healthStatus?: 'UNHEALTHY'|'HEALTHY',
     *     securityDetails?: SecurityDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
