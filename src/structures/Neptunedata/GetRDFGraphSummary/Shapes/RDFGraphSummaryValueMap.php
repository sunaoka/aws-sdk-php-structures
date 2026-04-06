<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetRDFGraphSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $version
 * @property \Aws\Api\DateTimeResult|null $lastStatisticsComputationTime
 * @property RDFGraphSummary|null $graphSummary
 */
class RDFGraphSummaryValueMap extends Shape
{
    /**
     * @param array{
     *     version?: string|null,
     *     lastStatisticsComputationTime?: \Aws\Api\DateTimeResult|null,
     *     graphSummary?: RDFGraphSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
