<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetQueryStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $EstimatedDataToScanBytes
 * @property int|null $PlanningTimeMillis
 * @property int|null $QueueTimeMillis
 * @property int|null $WorkUnitsGeneratedCount
 */
class PlanningStatistics extends Shape
{
    /**
     * @param array{
     *     EstimatedDataToScanBytes?: int|null,
     *     PlanningTimeMillis?: int|null,
     *     QueueTimeMillis?: int|null,
     *     WorkUnitsGeneratedCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
