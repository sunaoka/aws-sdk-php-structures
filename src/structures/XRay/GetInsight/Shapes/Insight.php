<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InsightId
 * @property string $GroupARN
 * @property string $GroupName
 * @property ServiceId $RootCauseServiceId
 * @property list<'FAULT'> $Categories
 * @property 'ACTIVE'|'CLOSED' $State
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $Summary
 * @property RequestImpactStatistics $ClientRequestImpactStatistics
 * @property RequestImpactStatistics $RootCauseServiceRequestImpactStatistics
 * @property list<AnomalousService> $TopAnomalousServices
 */
class Insight extends Shape
{
    /**
     * @param array{
     *     InsightId?: string,
     *     GroupARN?: string,
     *     GroupName?: string,
     *     RootCauseServiceId?: ServiceId,
     *     Categories?: list<'FAULT'>,
     *     State?: 'ACTIVE'|'CLOSED',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Summary?: string,
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
