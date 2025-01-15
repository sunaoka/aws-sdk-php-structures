<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAnomaly\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $Severity
 * @property 'ONGOING'|'CLOSED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $UpdateTime
 * @property AnomalyTimeRange|null $AnomalyTimeRange
 * @property AnomalyReportedTimeRange|null $AnomalyReportedTimeRange
 * @property PredictionTimeRange|null $PredictionTimeRange
 * @property AnomalySourceDetails|null $SourceDetails
 * @property string|null $AssociatedInsightId
 * @property ResourceCollection|null $ResourceCollection
 * @property double|null $Limit
 * @property AnomalySourceMetadata|null $SourceMetadata
 * @property list<AnomalyResource>|null $AnomalyResources
 * @property string|null $Description
 */
class ProactiveAnomaly extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Severity?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     Status?: 'ONGOING'|'CLOSED'|null,
     *     UpdateTime?: \Aws\Api\DateTimeResult|null,
     *     AnomalyTimeRange?: AnomalyTimeRange|null,
     *     AnomalyReportedTimeRange?: AnomalyReportedTimeRange|null,
     *     PredictionTimeRange?: PredictionTimeRange|null,
     *     SourceDetails?: AnomalySourceDetails|null,
     *     AssociatedInsightId?: string|null,
     *     ResourceCollection?: ResourceCollection|null,
     *     Limit?: double|null,
     *     SourceMetadata?: AnomalySourceMetadata|null,
     *     AnomalyResources?: list<AnomalyResource>|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
