<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\GetDiscoverySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $activeAgents
 * @property int $healthyAgents
 * @property int $blackListedAgents
 * @property int $shutdownAgents
 * @property int $unhealthyAgents
 * @property int $totalAgents
 * @property int $unknownAgents
 */
class CustomerAgentInfo extends Shape
{
    /**
     * @param array{
     *     activeAgents: int,
     *     healthyAgents: int,
     *     blackListedAgents: int,
     *     shutdownAgents: int,
     *     unhealthyAgents: int,
     *     totalAgents: int,
     *     unknownAgents: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
