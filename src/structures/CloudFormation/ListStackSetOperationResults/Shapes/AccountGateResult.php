<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperationResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCEEDED'|'FAILED'|'SKIPPED' $Status
 * @property string $StatusReason
 */
class AccountGateResult extends Shape
{
    /**
     * @param array{
     *     Status?: 'SUCCEEDED'|'FAILED'|'SKIPPED',
     *     StatusReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
