<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleGroupSourceListDetails|null $RulesSourceList
 * @property string|null $RulesString
 * @property list<RuleGroupSourceStatefulRulesDetails>|null $StatefulRules
 * @property RuleGroupSourceStatelessRulesAndCustomActionsDetails|null $StatelessRulesAndCustomActions
 */
class RuleGroupSource extends Shape
{
    /**
     * @param array{
     *     RulesSourceList?: RuleGroupSourceListDetails|null,
     *     RulesString?: string|null,
     *     StatefulRules?: list<RuleGroupSourceStatefulRulesDetails>|null,
     *     StatelessRulesAndCustomActions?: RuleGroupSourceStatelessRulesAndCustomActionsDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
