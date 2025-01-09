<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateApprovalRuleTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $approvalRuleTemplateName
 * @property string $approvalRuleTemplateContent
 * @property string $approvalRuleTemplateDescription
 */
class CreateApprovalRuleTemplateRequest extends Request
{
    /**
     * @param array{
     *     approvalRuleTemplateName: string,
     *     approvalRuleTemplateContent: string,
     *     approvalRuleTemplateDescription?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
