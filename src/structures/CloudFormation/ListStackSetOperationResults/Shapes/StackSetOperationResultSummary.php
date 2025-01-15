<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperationResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Account
 * @property string|null $Region
 * @property 'PENDING'|'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLED'|null $Status
 * @property string|null $StatusReason
 * @property AccountGateResult|null $AccountGateResult
 * @property string|null $OrganizationalUnitId
 */
class StackSetOperationResultSummary extends Shape
{
    /**
     * @param array{
     *     Account?: string|null,
     *     Region?: string|null,
     *     Status?: 'PENDING'|'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLED'|null,
     *     StatusReason?: string|null,
     *     AccountGateResult?: AccountGateResult|null,
     *     OrganizationalUnitId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
