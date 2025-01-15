<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchCreateBillScenarioCommitmentModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $key
 * @property string|null $errorMessage
 * @property 'CONFLICT'|'INTERNAL_SERVER_ERROR'|'INVALID_ACCOUNT'|null $errorCode
 */
class BatchCreateBillScenarioCommitmentModificationError extends Shape
{
    /**
     * @param array{
     *     key?: string|null,
     *     errorMessage?: string|null,
     *     errorCode?: 'CONFLICT'|'INTERNAL_SERVER_ERROR'|'INVALID_ACCOUNT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
