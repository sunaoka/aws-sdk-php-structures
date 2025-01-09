<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateApprovalRuleTemplateName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $oldApprovalRuleTemplateName
 * @property string $newApprovalRuleTemplateName
 */
class UpdateApprovalRuleTemplateNameRequest extends Request
{
    /**
     * @param array{
     *     oldApprovalRuleTemplateName: string,
     *     newApprovalRuleTemplateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
