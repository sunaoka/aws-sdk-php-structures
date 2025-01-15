<?php

namespace Sunaoka\Aws\Structures\CodeCommit\EvaluatePullRequestApprovalRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $approved
 * @property bool|null $overridden
 * @property list<string>|null $approvalRulesSatisfied
 * @property list<string>|null $approvalRulesNotSatisfied
 */
class Evaluation extends Shape
{
    /**
     * @param array{
     *     approved?: bool|null,
     *     overridden?: bool|null,
     *     approvalRulesSatisfied?: list<string>|null,
     *     approvalRulesNotSatisfied?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
