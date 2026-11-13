<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UnusualBehavior
 * @property string|null $BaselineContext
 * @property string|null $AnomalyScore
 * @property string|null $TrainingPeriod
 */
class KubernetesAnomaly extends Shape
{
    /**
     * @param array{
     *     UnusualBehavior?: string|null,
     *     BaselineContext?: string|null,
     *     AnomalyScore?: string|null,
     *     TrainingPeriod?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
