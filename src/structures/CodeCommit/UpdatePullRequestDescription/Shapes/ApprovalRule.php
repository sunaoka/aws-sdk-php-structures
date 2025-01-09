<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdatePullRequestDescription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $approvalRuleId
 * @property string $approvalRuleName
 * @property string $approvalRuleContent
 * @property string $ruleContentSha256
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property string $lastModifiedUser
 * @property OriginApprovalRuleTemplate $originApprovalRuleTemplate
 */
class ApprovalRule extends Shape
{
    /**
     * @param array{
     *     approvalRuleId?: string,
     *     approvalRuleName?: string,
     *     approvalRuleContent?: string,
     *     ruleContentSha256?: string,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     lastModifiedUser?: string,
     *     originApprovalRuleTemplate?: OriginApprovalRuleTemplate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
