<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RuleGroupSourceCustomActionsDetails> $CustomActions
 * @property list<RuleGroupSourceStatelessRulesDetails> $StatelessRules
 */
class RuleGroupSourceStatelessRulesAndCustomActionsDetails extends Shape
{
    /**
     * @param array{
     *     CustomActions?: list<RuleGroupSourceCustomActionsDetails>,
     *     StatelessRules?: list<RuleGroupSourceStatelessRulesDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
