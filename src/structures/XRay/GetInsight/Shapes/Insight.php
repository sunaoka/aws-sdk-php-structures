<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InsightId
 * @property string|null $GroupARN
 * @property string|null $GroupName
 * @property ServiceId|null $RootCauseServiceId
 * @property list<'FAULT'>|null $Categories
 * @property 'ACTIVE'|'CLOSED'|null $State
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $Summary
 * @property RequestImpactStatistics|null $ClientRequestImpactStatistics
 * @property RequestImpactStatistics|null $RootCauseServiceRequestImpactStatistics
 * @property list<AnomalousService>|null $TopAnomalousServices
 */
class Insight extends Shape
{
    /**
     * @param array{
     *     InsightId?: string|null,
     *     GroupARN?: string|null,
     *     GroupName?: string|null,
     *     RootCauseServiceId?: ServiceId|null,
     *     Categories?: list<'FAULT'>|null,
     *     State?: 'ACTIVE'|'CLOSED'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Summary?: string|null,
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
