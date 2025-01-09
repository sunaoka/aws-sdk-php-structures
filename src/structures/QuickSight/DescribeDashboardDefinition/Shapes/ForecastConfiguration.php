<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimeBasedForecastProperties $ForecastProperties
 * @property ForecastScenario $Scenario
 */
class ForecastConfiguration extends Shape
{
    /**
     * @param array{
     *     ForecastProperties?: TimeBasedForecastProperties,
     *     Scenario?: ForecastScenario
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
