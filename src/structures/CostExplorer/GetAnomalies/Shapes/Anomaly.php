<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AnomalyId
 * @property string|null $AnomalyStartDate
 * @property string|null $AnomalyEndDate
 * @property string|null $DimensionValue
 * @property list<RootCause>|null $RootCauses
 * @property AnomalyScore $AnomalyScore
 * @property Impact $Impact
 * @property string $MonitorArn
 * @property 'YES'|'NO'|'PLANNED_ACTIVITY'|null $Feedback
 */
class Anomaly extends Shape
{
    /**
     * @param array{
     *     AnomalyId: string,
     *     AnomalyStartDate?: string|null,
     *     AnomalyEndDate?: string|null,
     *     DimensionValue?: string|null,
     *     RootCauses?: list<RootCause>|null,
     *     AnomalyScore: AnomalyScore,
     *     Impact: Impact,
     *     MonitorArn: string,
     *     Feedback?: 'YES'|'NO'|'PLANNED_ACTIVITY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
