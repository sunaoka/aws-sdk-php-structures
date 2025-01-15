<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimeBasedForecastProperties|null $ForecastProperties
 * @property ForecastScenario|null $Scenario
 */
class ForecastConfiguration extends Shape
{
    /**
     * @param array{
     *     ForecastProperties?: TimeBasedForecastProperties|null,
     *     Scenario?: ForecastScenario|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
