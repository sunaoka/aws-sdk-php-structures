<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateApprovalRuleTemplateDescription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $approvalRuleTemplateName
 * @property string $approvalRuleTemplateDescription
 */
class UpdateApprovalRuleTemplateDescriptionRequest extends Request
{
    /**
     * @param array{
     *     approvalRuleTemplateName: string,
     *     approvalRuleTemplateDescription: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
