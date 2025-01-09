<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\GetDiscoverySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $activeAgentlessCollectors
 * @property int $healthyAgentlessCollectors
 * @property int $denyListedAgentlessCollectors
 * @property int $shutdownAgentlessCollectors
 * @property int $unhealthyAgentlessCollectors
 * @property int $totalAgentlessCollectors
 * @property int $unknownAgentlessCollectors
 */
class CustomerAgentlessCollectorInfo extends Shape
{
    /**
     * @param array{
     *     activeAgentlessCollectors: int,
     *     healthyAgentlessCollectors: int,
     *     denyListedAgentlessCollectors: int,
     *     shutdownAgentlessCollectors: int,
     *     unhealthyAgentlessCollectors: int,
     *     totalAgentlessCollectors: int,
     *     unknownAgentlessCollectors: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
