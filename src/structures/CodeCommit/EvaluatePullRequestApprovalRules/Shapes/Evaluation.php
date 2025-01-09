<?php

namespace Sunaoka\Aws\Structures\CodeCommit\EvaluatePullRequestApprovalRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $approved
 * @property bool $overridden
 * @property list<string> $approvalRulesSatisfied
 * @property list<string> $approvalRulesNotSatisfied
 */
class Evaluation extends Shape
{
    /**
     * @param array{
     *     approved?: bool,
     *     overridden?: bool,
     *     approvalRulesSatisfied?: list<string>,
     *     approvalRulesNotSatisfied?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
