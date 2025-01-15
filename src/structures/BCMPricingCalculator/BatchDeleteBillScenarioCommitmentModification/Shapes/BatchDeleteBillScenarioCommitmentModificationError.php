<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchDeleteBillScenarioCommitmentModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property 'BAD_REQUEST'|'CONFLICT'|'INTERNAL_SERVER_ERROR'|null $errorCode
 * @property string|null $errorMessage
 */
class BatchDeleteBillScenarioCommitmentModificationError extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     errorCode?: 'BAD_REQUEST'|'CONFLICT'|'INTERNAL_SERVER_ERROR'|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
