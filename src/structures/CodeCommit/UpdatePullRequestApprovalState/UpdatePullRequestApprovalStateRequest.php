<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdatePullRequestApprovalState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property string $revisionId
 * @property 'APPROVE'|'REVOKE' $approvalState
 */
class UpdatePullRequestApprovalStateRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     revisionId: string,
     *     approvalState: 'APPROVE'|'REVOKE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
