<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetApprovalRuleTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $approvalRuleTemplateName
 */
class GetApprovalRuleTemplateRequest extends Request
{
    /**
     * @param array{approvalRuleTemplateName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
