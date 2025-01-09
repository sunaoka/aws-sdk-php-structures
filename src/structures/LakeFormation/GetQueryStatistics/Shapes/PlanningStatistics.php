<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetQueryStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $EstimatedDataToScanBytes
 * @property int $PlanningTimeMillis
 * @property int $QueueTimeMillis
 * @property int $WorkUnitsGeneratedCount
 */
class PlanningStatistics extends Shape
{
    /**
     * @param array{
     *     EstimatedDataToScanBytes?: int,
     *     PlanningTimeMillis?: int,
     *     QueueTimeMillis?: int,
     *     WorkUnitsGeneratedCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
