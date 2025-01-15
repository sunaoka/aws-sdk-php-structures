<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateApprovalRuleTemplateContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $approvalRuleTemplateId
 * @property string|null $approvalRuleTemplateName
 * @property string|null $approvalRuleTemplateDescription
 * @property string|null $approvalRuleTemplateContent
 * @property string|null $ruleContentSha256
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property string|null $lastModifiedUser
 */
class ApprovalRuleTemplate extends Shape
{
    /**
     * @param array{
     *     approvalRuleTemplateId?: string|null,
     *     approvalRuleTemplateName?: string|null,
     *     approvalRuleTemplateDescription?: string|null,
     *     approvalRuleTemplateContent?: string|null,
     *     ruleContentSha256?: string|null,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedUser?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
