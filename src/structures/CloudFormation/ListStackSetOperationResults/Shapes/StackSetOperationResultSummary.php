<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperationResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Account
 * @property string $Region
 * @property 'PENDING'|'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLED' $Status
 * @property string $StatusReason
 * @property AccountGateResult $AccountGateResult
 * @property string $OrganizationalUnitId
 */
class StackSetOperationResultSummary extends Shape
{
    /**
     * @param array{
     *     Account?: string,
     *     Region?: string,
     *     Status?: 'PENDING'|'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLED',
     *     StatusReason?: string,
     *     AccountGateResult?: AccountGateResult,
     *     OrganizationalUnitId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
