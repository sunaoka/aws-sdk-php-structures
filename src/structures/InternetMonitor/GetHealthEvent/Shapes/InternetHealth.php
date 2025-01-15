<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetHealthEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AvailabilityMeasurement|null $Availability
 * @property PerformanceMeasurement|null $Performance
 */
class InternetHealth extends Shape
{
    /**
     * @param array{
     *     Availability?: AvailabilityMeasurement|null,
     *     Performance?: PerformanceMeasurement|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
