<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $MonitorArn
 * @property Shapes\AnomalyDateInterval $DateInterval
 * @property 'YES'|'NO'|'PLANNED_ACTIVITY'|null $Feedback
 * @property Shapes\TotalImpactFilter|null $TotalImpact
 * @property string|null $NextPageToken
 * @property int|null $MaxResults
 */
class GetAnomaliesRequest extends Request
{
    /**
     * @param array{
     *     MonitorArn?: string|null,
     *     DateInterval: Shapes\AnomalyDateInterval,
     *     Feedback?: 'YES'|'NO'|'PLANNED_ACTIVITY'|null,
     *     TotalImpact?: Shapes\TotalImpactFilter|null,
     *     NextPageToken?: string|null,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
