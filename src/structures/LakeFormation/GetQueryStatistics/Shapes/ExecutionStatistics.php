<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetQueryStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AverageExecutionTimeMillis
 * @property int $DataScannedBytes
 * @property int $WorkUnitsExecutedCount
 */
class ExecutionStatistics extends Shape
{
    /**
     * @param array{
     *     AverageExecutionTimeMillis?: int,
     *     DataScannedBytes?: int,
     *     WorkUnitsExecutedCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
