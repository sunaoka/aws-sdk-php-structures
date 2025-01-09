<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\GetDiscoverySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $activeMeCollectors
 * @property int $healthyMeCollectors
 * @property int $denyListedMeCollectors
 * @property int $shutdownMeCollectors
 * @property int $unhealthyMeCollectors
 * @property int $totalMeCollectors
 * @property int $unknownMeCollectors
 */
class CustomerMeCollectorInfo extends Shape
{
    /**
     * @param array{
     *     activeMeCollectors: int,
     *     healthyMeCollectors: int,
     *     denyListedMeCollectors: int,
     *     shutdownMeCollectors: int,
     *     unhealthyMeCollectors: int,
     *     totalMeCollectors: int,
     *     unknownMeCollectors: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
