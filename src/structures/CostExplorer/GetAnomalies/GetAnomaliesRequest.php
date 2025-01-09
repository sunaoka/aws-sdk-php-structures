<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorArn
 * @property Shapes\AnomalyDateInterval $DateInterval
 * @property 'YES'|'NO'|'PLANNED_ACTIVITY' $Feedback
 * @property Shapes\TotalImpactFilter $TotalImpact
 * @property string $NextPageToken
 * @property int $MaxResults
 */
class GetAnomaliesRequest extends Request
{
    /**
     * @param array{
     *     MonitorArn?: string,
     *     DateInterval: Shapes\AnomalyDateInterval,
     *     Feedback?: 'YES'|'NO'|'PLANNED_ACTIVITY',
     *     TotalImpact?: Shapes\TotalImpactFilter,
     *     NextPageToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
