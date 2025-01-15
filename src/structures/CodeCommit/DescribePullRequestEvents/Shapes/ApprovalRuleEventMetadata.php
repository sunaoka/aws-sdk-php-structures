<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $approvalRuleName
 * @property string|null $approvalRuleId
 * @property string|null $approvalRuleContent
 */
class ApprovalRuleEventMetadata extends Shape
{
    /**
     * @param array{
     *     approvalRuleName?: string|null,
     *     approvalRuleId?: string|null,
     *     approvalRuleContent?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
