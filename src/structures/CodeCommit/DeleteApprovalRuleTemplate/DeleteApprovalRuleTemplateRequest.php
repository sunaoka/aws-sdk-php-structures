<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DeleteApprovalRuleTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $approvalRuleTemplateName
 */
class DeleteApprovalRuleTemplateRequest extends Request
{
    /**
     * @param array{approvalRuleTemplateName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
