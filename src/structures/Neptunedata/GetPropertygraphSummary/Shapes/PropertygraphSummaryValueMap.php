<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetPropertygraphSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $version
 * @property \Aws\Api\DateTimeResult|null $lastStatisticsComputationTime
 * @property PropertygraphSummary|null $graphSummary
 */
class PropertygraphSummaryValueMap extends Shape
{
    /**
     * @param array{
     *     version?: string|null,
     *     lastStatisticsComputationTime?: \Aws\Api\DateTimeResult|null,
     *     graphSummary?: PropertygraphSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
