<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DeletePullRequestApprovalRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property string $approvalRuleName
 */
class DeletePullRequestApprovalRuleRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     approvalRuleName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
