<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateApprovalRuleTemplateContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $approvalRuleTemplateName
 * @property string $newRuleContent
 * @property string $existingRuleContentSha256
 */
class UpdateApprovalRuleTemplateContentRequest extends Request
{
    /**
     * @param array{
     *     approvalRuleTemplateName: string,
     *     newRuleContent: string,
     *     existingRuleContentSha256?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
