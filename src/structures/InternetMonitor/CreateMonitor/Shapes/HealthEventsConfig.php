<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\CreateMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $AvailabilityScoreThreshold
 * @property double|null $PerformanceScoreThreshold
 * @property LocalHealthEventsConfig|null $AvailabilityLocalHealthEventsConfig
 * @property LocalHealthEventsConfig|null $PerformanceLocalHealthEventsConfig
 */
class HealthEventsConfig extends Shape
{
    /**
     * @param array{
     *     AvailabilityScoreThreshold?: double|null,
     *     PerformanceScoreThreshold?: double|null,
     *     AvailabilityLocalHealthEventsConfig?: LocalHealthEventsConfig|null,
     *     PerformanceLocalHealthEventsConfig?: LocalHealthEventsConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
