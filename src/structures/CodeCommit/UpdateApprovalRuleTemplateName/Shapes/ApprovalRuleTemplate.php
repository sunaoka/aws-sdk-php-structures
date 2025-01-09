<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateApprovalRuleTemplateName\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $approvalRuleTemplateId
 * @property string $approvalRuleTemplateName
 * @property string $approvalRuleTemplateDescription
 * @property string $approvalRuleTemplateContent
 * @property string $ruleContentSha256
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property string $lastModifiedUser
 */
class ApprovalRuleTemplate extends Shape
{
    /**
     * @param array{
     *     approvalRuleTemplateId?: string,
     *     approvalRuleTemplateName?: string,
     *     approvalRuleTemplateDescription?: string,
     *     approvalRuleTemplateContent?: string,
     *     ruleContentSha256?: string,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     lastModifiedUser?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
