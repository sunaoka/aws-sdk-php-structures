<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetHealthEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $ExperienceScore
 * @property double $PercentOfTotalTrafficImpacted
 * @property double $PercentOfClientLocationImpacted
 * @property RoundTripTime $RoundTripTime
 */
class PerformanceMeasurement extends Shape
{
    /**
     * @param array{
     *     ExperienceScore?: double,
     *     PercentOfTotalTrafficImpacted?: double,
     *     PercentOfClientLocationImpacted?: double,
     *     RoundTripTime?: RoundTripTime
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
