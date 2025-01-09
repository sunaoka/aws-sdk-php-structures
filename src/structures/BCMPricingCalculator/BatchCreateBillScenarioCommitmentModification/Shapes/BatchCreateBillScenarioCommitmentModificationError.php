<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchCreateBillScenarioCommitmentModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $errorMessage
 * @property 'CONFLICT'|'INTERNAL_SERVER_ERROR'|'INVALID_ACCOUNT' $errorCode
 */
class BatchCreateBillScenarioCommitmentModificationError extends Shape
{
    /**
     * @param array{
     *     key?: string,
     *     errorMessage?: string,
     *     errorCode?: 'CONFLICT'|'INTERNAL_SERVER_ERROR'|'INVALID_ACCOUNT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
