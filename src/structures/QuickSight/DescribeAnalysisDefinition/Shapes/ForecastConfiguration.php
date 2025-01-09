<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

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
