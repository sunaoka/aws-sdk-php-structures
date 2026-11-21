<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchPutPolicyAssignmentByPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $PolicyArn
 * @property list<Shapes\PutAssignmentEntry> $Assignments
 */
class BatchPutPolicyAssignmentByPolicyRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     PolicyArn: string,
     *     Assignments: list<Shapes\PutAssignmentEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
