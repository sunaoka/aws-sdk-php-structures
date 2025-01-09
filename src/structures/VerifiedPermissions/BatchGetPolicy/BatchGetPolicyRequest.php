<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchGetPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchGetPolicyInputItem> $requests
 */
class BatchGetPolicyRequest extends Request
{
    /**
     * @param array{requests: list<Shapes\BatchGetPolicyInputItem>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
