<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchDeleteBillScenarioCommitmentModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'BAD_REQUEST'|'CONFLICT'|'INTERNAL_SERVER_ERROR' $errorCode
 * @property string $errorMessage
 */
class BatchDeleteBillScenarioCommitmentModificationError extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     errorCode?: 'BAD_REQUEST'|'CONFLICT'|'INTERNAL_SERVER_ERROR',
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
