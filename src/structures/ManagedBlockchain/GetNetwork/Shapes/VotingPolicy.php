<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApprovalThresholdPolicy $ApprovalThresholdPolicy
 */
class VotingPolicy extends Shape
{
    /**
     * @param array{ApprovalThresholdPolicy?: ApprovalThresholdPolicy} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
