<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDeletePolicyAssignmentByPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $PolicyArn
 * @property list<string> $PrincipalArns
 */
class BatchDeletePolicyAssignmentByPolicyRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     PolicyArn: string,
     *     PrincipalArns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
