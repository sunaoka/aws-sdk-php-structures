<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetRDFGraphSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property \Aws\Api\DateTimeResult $lastStatisticsComputationTime
 * @property RDFGraphSummary $graphSummary
 */
class RDFGraphSummaryValueMap extends Shape
{
    /**
     * @param array{
     *     version?: string,
     *     lastStatisticsComputationTime?: \Aws\Api\DateTimeResult,
     *     graphSummary?: RDFGraphSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
