<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetPullRequestApprovalStates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userArn
 * @property 'APPROVE'|'REVOKE'|null $approvalState
 */
class Approval extends Shape
{
    /**
     * @param array{
     *     userArn?: string|null,
     *     approvalState?: 'APPROVE'|'REVOKE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
