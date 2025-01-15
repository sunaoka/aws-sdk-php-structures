<?php

namespace Sunaoka\Aws\Structures\Athena\ListCalculationExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CalculationExecutionId
 * @property string|null $Description
 * @property CalculationStatus|null $Status
 */
class CalculationSummary extends Shape
{
    /**
     * @param array{
     *     CalculationExecutionId?: string|null,
     *     Description?: string|null,
     *     Status?: CalculationStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
