<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupRelatedMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property string $AnomalyGroupId
 * @property 'CAUSE_OF_INPUT_ANOMALY_GROUP'|'EFFECT_OF_INPUT_ANOMALY_GROUP'|null $RelationshipTypeFilter
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAnomalyGroupRelatedMetricsRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     AnomalyGroupId: string,
     *     RelationshipTypeFilter?: 'CAUSE_OF_INPUT_ANOMALY_GROUP'|'EFFECT_OF_INPUT_ANOMALY_GROUP'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
