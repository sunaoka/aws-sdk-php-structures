<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agentId
 * @property string|null $hostName
 * @property list<AgentNetworkInfo>|null $agentNetworkInfoList
 * @property string|null $connectorId
 * @property string|null $version
 * @property 'HEALTHY'|'UNHEALTHY'|'RUNNING'|'UNKNOWN'|'BLACKLISTED'|'SHUTDOWN'|null $health
 * @property string|null $lastHealthPingTime
 * @property string|null $collectionStatus
 * @property string|null $agentType
 * @property string|null $registeredTime
 */
class AgentInfo extends Shape
{
    /**
     * @param array{
     *     agentId?: string|null,
     *     hostName?: string|null,
     *     agentNetworkInfoList?: list<AgentNetworkInfo>|null,
     *     connectorId?: string|null,
     *     version?: string|null,
     *     health?: 'HEALTHY'|'UNHEALTHY'|'RUNNING'|'UNKNOWN'|'BLACKLISTED'|'SHUTDOWN'|null,
     *     lastHealthPingTime?: string|null,
     *     collectionStatus?: string|null,
     *     agentType?: string|null,
     *     registeredTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
