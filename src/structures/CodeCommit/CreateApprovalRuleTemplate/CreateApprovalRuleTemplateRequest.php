<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateApprovalRuleTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $approvalRuleTemplateName
 * @property string $approvalRuleTemplateContent
 * @property string|null $approvalRuleTemplateDescription
 */
class CreateApprovalRuleTemplateRequest extends Request
{
    /**
     * @param array{
     *     approvalRuleTemplateName: string,
     *     approvalRuleTemplateContent: string,
     *     approvalRuleTemplateDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
