<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 */
class MinimumThroughputBillingCommitmentInput extends Shape
{
    /**
     * @param array{Status: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
