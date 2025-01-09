<?php

namespace Sunaoka\Aws\Structures\Athena\ListCalculationExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CalculationExecutionId
 * @property string $Description
 * @property CalculationStatus $Status
 */
class CalculationSummary extends Shape
{
    /**
     * @param array{
     *     CalculationExecutionId?: string,
     *     Description?: string,
     *     Status?: CalculationStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
