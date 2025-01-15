<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RuleGroupSourceCustomActionsDetails>|null $CustomActions
 * @property list<RuleGroupSourceStatelessRulesDetails>|null $StatelessRules
 */
class RuleGroupSourceStatelessRulesAndCustomActionsDetails extends Shape
{
    /**
     * @param array{
     *     CustomActions?: list<RuleGroupSourceCustomActionsDetails>|null,
     *     StatelessRules?: list<RuleGroupSourceStatelessRulesDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
