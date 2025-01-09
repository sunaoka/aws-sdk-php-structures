<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchDeleteBillScenarioUsageModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $errorMessage
 * @property 'BAD_REQUEST'|'CONFLICT'|'INTERNAL_SERVER_ERROR' $errorCode
 */
class BatchDeleteBillScenarioUsageModificationError extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     errorMessage?: string,
     *     errorCode?: 'BAD_REQUEST'|'CONFLICT'|'INTERNAL_SERVER_ERROR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
