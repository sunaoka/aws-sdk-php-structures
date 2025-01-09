<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetPullRequestApprovalStates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userArn
 * @property 'APPROVE'|'REVOKE' $approvalState
 */
class Approval extends Shape
{
    /**
     * @param array{
     *     userArn?: string,
     *     approvalState?: 'APPROVE'|'REVOKE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
