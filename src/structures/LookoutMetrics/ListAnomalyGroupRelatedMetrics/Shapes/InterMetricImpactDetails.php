<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupRelatedMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property string $AnomalyGroupId
 * @property 'CAUSE_OF_INPUT_ANOMALY_GROUP'|'EFFECT_OF_INPUT_ANOMALY_GROUP' $RelationshipType
 * @property double $ContributionPercentage
 */
class InterMetricImpactDetails extends Shape
{
    /**
     * @param array{
     *     MetricName?: string,
     *     AnomalyGroupId?: string,
     *     RelationshipType?: 'CAUSE_OF_INPUT_ANOMALY_GROUP'|'EFFECT_OF_INPUT_ANOMALY_GROUP',
     *     ContributionPercentage?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
