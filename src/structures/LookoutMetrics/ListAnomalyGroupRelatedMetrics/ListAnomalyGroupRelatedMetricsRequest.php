<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupRelatedMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property string $AnomalyGroupId
 * @property 'CAUSE_OF_INPUT_ANOMALY_GROUP'|'EFFECT_OF_INPUT_ANOMALY_GROUP' $RelationshipTypeFilter
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListAnomalyGroupRelatedMetricsRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     AnomalyGroupId: string,
     *     RelationshipTypeFilter?: 'CAUSE_OF_INPUT_ANOMALY_GROUP'|'EFFECT_OF_INPUT_ANOMALY_GROUP',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
