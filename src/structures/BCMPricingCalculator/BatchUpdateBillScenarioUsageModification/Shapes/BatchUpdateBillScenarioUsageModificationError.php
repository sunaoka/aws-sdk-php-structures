<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateBillScenarioUsageModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $errorMessage
 * @property 'BAD_REQUEST'|'NOT_FOUND'|'CONFLICT'|'INTERNAL_SERVER_ERROR'|null $errorCode
 */
class BatchUpdateBillScenarioUsageModificationError extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     errorMessage?: string|null,
     *     errorCode?: 'BAD_REQUEST'|'NOT_FOUND'|'CONFLICT'|'INTERNAL_SERVER_ERROR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
