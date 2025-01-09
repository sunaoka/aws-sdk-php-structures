<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentId
 * @property string $hostName
 * @property list<AgentNetworkInfo> $agentNetworkInfoList
 * @property string $connectorId
 * @property string $version
 * @property 'HEALTHY'|'UNHEALTHY'|'RUNNING'|'UNKNOWN'|'BLACKLISTED'|'SHUTDOWN' $health
 * @property string $lastHealthPingTime
 * @property string $collectionStatus
 * @property string $agentType
 * @property string $registeredTime
 */
class AgentInfo extends Shape
{
    /**
     * @param array{
     *     agentId?: string,
     *     hostName?: string,
     *     agentNetworkInfoList?: list<AgentNetworkInfo>,
     *     connectorId?: string,
     *     version?: string,
     *     health?: 'HEALTHY'|'UNHEALTHY'|'RUNNING'|'UNKNOWN'|'BLACKLISTED'|'SHUTDOWN',
     *     lastHealthPingTime?: string,
     *     collectionStatus?: string,
     *     agentType?: string,
     *     registeredTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
