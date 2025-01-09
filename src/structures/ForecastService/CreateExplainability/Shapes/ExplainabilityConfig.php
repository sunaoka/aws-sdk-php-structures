<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateExplainability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'SPECIFIC' $TimeSeriesGranularity
 * @property 'ALL'|'SPECIFIC' $TimePointGranularity
 */
class ExplainabilityConfig extends Shape
{
    /**
     * @param array{
     *     TimeSeriesGranularity: 'ALL'|'SPECIFIC',
     *     TimePointGranularity: 'ALL'|'SPECIFIC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
