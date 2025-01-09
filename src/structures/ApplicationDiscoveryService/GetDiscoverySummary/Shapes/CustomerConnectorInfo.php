<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\GetDiscoverySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $activeConnectors
 * @property int $healthyConnectors
 * @property int $blackListedConnectors
 * @property int $shutdownConnectors
 * @property int $unhealthyConnectors
 * @property int $totalConnectors
 * @property int $unknownConnectors
 */
class CustomerConnectorInfo extends Shape
{
    /**
     * @param array{
     *     activeConnectors: int,
     *     healthyConnectors: int,
     *     blackListedConnectors: int,
     *     shutdownConnectors: int,
     *     unhealthyConnectors: int,
     *     totalConnectors: int,
     *     unknownConnectors: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
