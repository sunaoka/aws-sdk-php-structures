<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdatePullRequestApprovalRuleContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pullRequestId
 * @property string $approvalRuleName
 * @property string $existingRuleContentSha256
 * @property string $newRuleContent
 */
class UpdatePullRequestApprovalRuleContentRequest extends Request
{
    /**
     * @param array{
     *     pullRequestId: string,
     *     approvalRuleName: string,
     *     existingRuleContentSha256?: string,
     *     newRuleContent: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
