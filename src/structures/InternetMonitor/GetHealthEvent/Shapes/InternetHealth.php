<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetHealthEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AvailabilityMeasurement $Availability
 * @property PerformanceMeasurement $Performance
 */
class InternetHealth extends Shape
{
    /**
     * @param array{
     *     Availability?: AvailabilityMeasurement,
     *     Performance?: PerformanceMeasurement
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
