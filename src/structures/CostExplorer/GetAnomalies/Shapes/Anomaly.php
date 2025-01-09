<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnomalyId
 * @property string $AnomalyStartDate
 * @property string $AnomalyEndDate
 * @property string $DimensionValue
 * @property list<RootCause> $RootCauses
 * @property AnomalyScore $AnomalyScore
 * @property Impact $Impact
 * @property string $MonitorArn
 * @property 'YES'|'NO'|'PLANNED_ACTIVITY' $Feedback
 */
class Anomaly extends Shape
{
    /**
     * @param array{
     *     AnomalyId: string,
     *     AnomalyStartDate?: string,
     *     AnomalyEndDate?: string,
     *     DimensionValue?: string,
     *     RootCauses?: list<RootCause>,
     *     AnomalyScore: AnomalyScore,
     *     Impact: Impact,
     *     MonitorArn: string,
     *     Feedback?: 'YES'|'NO'|'PLANNED_ACTIVITY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
