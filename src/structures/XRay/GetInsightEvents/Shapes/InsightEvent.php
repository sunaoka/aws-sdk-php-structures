<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Summary
 * @property \Aws\Api\DateTimeResult $EventTime
 * @property RequestImpactStatistics $ClientRequestImpactStatistics
 * @property RequestImpactStatistics $RootCauseServiceRequestImpactStatistics
 * @property list<AnomalousService> $TopAnomalousServices
 */
class InsightEvent extends Shape
{
    /**
     * @param array{
     *     Summary?: string,
     *     EventTime?: \Aws\Api\DateTimeResult,
     *     ClientRequestImpactStatistics?: RequestImpactStatistics,
     *     RootCauseServiceRequestImpactStatistics?: RequestImpactStatistics,
     *     TopAnomalousServices?: list<AnomalousService>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
