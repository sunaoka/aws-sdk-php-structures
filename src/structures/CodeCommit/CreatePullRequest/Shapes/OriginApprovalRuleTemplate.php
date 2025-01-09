<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreatePullRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $approvalRuleTemplateId
 * @property string $approvalRuleTemplateName
 */
class OriginApprovalRuleTemplate extends Shape
{
    /**
     * @param array{
     *     approvalRuleTemplateId?: string,
     *     approvalRuleTemplateName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
