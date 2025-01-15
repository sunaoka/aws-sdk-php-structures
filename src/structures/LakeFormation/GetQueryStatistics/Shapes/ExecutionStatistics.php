<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetQueryStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AverageExecutionTimeMillis
 * @property int|null $DataScannedBytes
 * @property int|null $WorkUnitsExecutedCount
 */
class ExecutionStatistics extends Shape
{
    /**
     * @param array{
     *     AverageExecutionTimeMillis?: int|null,
     *     DataScannedBytes?: int|null,
     *     WorkUnitsExecutedCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
