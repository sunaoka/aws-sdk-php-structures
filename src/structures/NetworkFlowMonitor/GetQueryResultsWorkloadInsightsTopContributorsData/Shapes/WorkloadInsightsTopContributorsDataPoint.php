<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsWorkloadInsightsTopContributorsData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<\Aws\Api\DateTimeResult> $timestamps
 * @property list<double> $values
 * @property string $label
 */
class WorkloadInsightsTopContributorsDataPoint extends Shape
{
    /**
     * @param array{
     *     timestamps: list<\Aws\Api\DateTimeResult>,
     *     values: list<double>,
     *     label: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
