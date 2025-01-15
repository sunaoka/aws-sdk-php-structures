<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergePullRequestByFastForward\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $approvalRuleId
 * @property string|null $approvalRuleName
 * @property string|null $approvalRuleContent
 * @property string|null $ruleContentSha256
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property string|null $lastModifiedUser
 * @property OriginApprovalRuleTemplate|null $originApprovalRuleTemplate
 */
class ApprovalRule extends Shape
{
    /**
     * @param array{
     *     approvalRuleId?: string|null,
     *     approvalRuleName?: string|null,
     *     approvalRuleContent?: string|null,
     *     ruleContentSha256?: string|null,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedUser?: string|null,
     *     originApprovalRuleTemplate?: OriginApprovalRuleTemplate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
