<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\ListHealthEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $ExperienceScore
 * @property double|null $PercentOfTotalTrafficImpacted
 * @property double|null $PercentOfClientLocationImpacted
 */
class AvailabilityMeasurement extends Shape
{
    /**
     * @param array{
     *     ExperienceScore?: double|null,
     *     PercentOfTotalTrafficImpacted?: double|null,
     *     PercentOfClientLocationImpacted?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
