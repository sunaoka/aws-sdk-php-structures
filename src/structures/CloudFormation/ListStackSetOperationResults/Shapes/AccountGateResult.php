<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperationResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCEEDED'|'FAILED'|'SKIPPED'|null $Status
 * @property string|null $StatusReason
 */
class AccountGateResult extends Shape
{
    /**
     * @param array{
     *     Status?: 'SUCCEEDED'|'FAILED'|'SKIPPED'|null,
     *     StatusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
