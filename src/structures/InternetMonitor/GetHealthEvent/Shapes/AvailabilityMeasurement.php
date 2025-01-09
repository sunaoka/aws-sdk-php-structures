<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetHealthEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $ExperienceScore
 * @property double $PercentOfTotalTrafficImpacted
 * @property double $PercentOfClientLocationImpacted
 */
class AvailabilityMeasurement extends Shape
{
    /**
     * @param array{
     *     ExperienceScore?: double,
     *     PercentOfTotalTrafficImpacted?: double,
     *     PercentOfClientLocationImpacted?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
