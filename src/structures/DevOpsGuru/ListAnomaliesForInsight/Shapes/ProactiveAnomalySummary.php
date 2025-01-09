<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'LOW'|'MEDIUM'|'HIGH' $Severity
 * @property 'ONGOING'|'CLOSED' $Status
 * @property \Aws\Api\DateTimeResult $UpdateTime
 * @property AnomalyTimeRange $AnomalyTimeRange
 * @property AnomalyReportedTimeRange $AnomalyReportedTimeRange
 * @property PredictionTimeRange $PredictionTimeRange
 * @property AnomalySourceDetails $SourceDetails
 * @property string $AssociatedInsightId
 * @property ResourceCollection $ResourceCollection
 * @property double $Limit
 * @property AnomalySourceMetadata $SourceMetadata
 * @property list<AnomalyResource> $AnomalyResources
 * @property string $Description
 */
class ProactiveAnomalySummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Severity?: 'LOW'|'MEDIUM'|'HIGH',
     *     Status?: 'ONGOING'|'CLOSED',
     *     UpdateTime?: \Aws\Api\DateTimeResult,
     *     AnomalyTimeRange?: AnomalyTimeRange,
     *     AnomalyReportedTimeRange?: AnomalyReportedTimeRange,
     *     PredictionTimeRange?: PredictionTimeRange,
     *     SourceDetails?: AnomalySourceDetails,
     *     AssociatedInsightId?: string,
     *     ResourceCollection?: ResourceCollection,
     *     Limit?: double,
     *     SourceMetadata?: AnomalySourceMetadata,
     *     AnomalyResources?: list<AnomalyResource>,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
