<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Summary
 * @property \Aws\Api\DateTimeResult|null $EventTime
 * @property RequestImpactStatistics|null $ClientRequestImpactStatistics
 * @property RequestImpactStatistics|null $RootCauseServiceRequestImpactStatistics
 * @property list<AnomalousService>|null $TopAnomalousServices
 */
class InsightEvent extends Shape
{
    /**
     * @param array{
     *     Summary?: string|null,
     *     EventTime?: \Aws\Api\DateTimeResult|null,
     *     ClientRequestImpactStatistics?: RequestImpactStatistics|null,
     *     RootCauseServiceRequestImpactStatistics?: RequestImpactStatistics|null,
     *     TopAnomalousServices?: list<AnomalousService>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
