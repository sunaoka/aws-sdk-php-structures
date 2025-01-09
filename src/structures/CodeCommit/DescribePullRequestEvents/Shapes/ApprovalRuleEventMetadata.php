<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $approvalRuleName
 * @property string $approvalRuleId
 * @property string $approvalRuleContent
 */
class ApprovalRuleEventMetadata extends Shape
{
    /**
     * @param array{
     *     approvalRuleName?: string,
     *     approvalRuleId?: string,
     *     approvalRuleContent?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
