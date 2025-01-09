<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreatePullRequestApprovalRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property string $approvalRuleName
 * @property string $approvalRuleContent
 */
class CreatePullRequestApprovalRuleRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     approvalRuleName: string,
     *     approvalRuleContent: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
