<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetPropertygraphSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property \Aws\Api\DateTimeResult $lastStatisticsComputationTime
 * @property PropertygraphSummary $graphSummary
 */
class PropertygraphSummaryValueMap extends Shape
{
    /**
     * @param array{
     *     version?: string,
     *     lastStatisticsComputationTime?: \Aws\Api\DateTimeResult,
     *     graphSummary?: PropertygraphSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
