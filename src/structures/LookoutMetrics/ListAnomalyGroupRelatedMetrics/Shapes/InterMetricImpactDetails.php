<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupRelatedMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricName
 * @property string|null $AnomalyGroupId
 * @property 'CAUSE_OF_INPUT_ANOMALY_GROUP'|'EFFECT_OF_INPUT_ANOMALY_GROUP'|null $RelationshipType
 * @property double|null $ContributionPercentage
 */
class InterMetricImpactDetails extends Shape
{
    /**
     * @param array{
     *     MetricName?: string|null,
     *     AnomalyGroupId?: string|null,
     *     RelationshipType?: 'CAUSE_OF_INPUT_ANOMALY_GROUP'|'EFFECT_OF_INPUT_ANOMALY_GROUP'|null,
     *     ContributionPercentage?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
