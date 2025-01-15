<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdatePullRequestStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $approvalRuleTemplateId
 * @property string|null $approvalRuleTemplateName
 */
class OriginApprovalRuleTemplate extends Shape
{
    /**
     * @param array{
     *     approvalRuleTemplateId?: string|null,
     *     approvalRuleTemplateName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
