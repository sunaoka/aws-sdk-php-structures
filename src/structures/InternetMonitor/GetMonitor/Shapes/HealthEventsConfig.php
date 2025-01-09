<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $AvailabilityScoreThreshold
 * @property double $PerformanceScoreThreshold
 * @property LocalHealthEventsConfig $AvailabilityLocalHealthEventsConfig
 * @property LocalHealthEventsConfig $PerformanceLocalHealthEventsConfig
 */
class HealthEventsConfig extends Shape
{
    /**
     * @param array{
     *     AvailabilityScoreThreshold?: double,
     *     PerformanceScoreThreshold?: double,
     *     AvailabilityLocalHealthEventsConfig?: LocalHealthEventsConfig,
     *     PerformanceLocalHealthEventsConfig?: LocalHealthEventsConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
