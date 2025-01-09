<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleGroupSourceListDetails $RulesSourceList
 * @property string $RulesString
 * @property list<RuleGroupSourceStatefulRulesDetails> $StatefulRules
 * @property RuleGroupSourceStatelessRulesAndCustomActionsDetails $StatelessRulesAndCustomActions
 */
class RuleGroupSource extends Shape
{
    /**
     * @param array{
     *     RulesSourceList?: RuleGroupSourceListDetails,
     *     RulesString?: string,
     *     StatefulRules?: list<RuleGroupSourceStatefulRulesDetails>,
     *     StatelessRulesAndCustomActions?: RuleGroupSourceStatelessRulesAndCustomActionsDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
