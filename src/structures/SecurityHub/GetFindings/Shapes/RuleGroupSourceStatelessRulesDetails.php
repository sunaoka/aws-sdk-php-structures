<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Priority
 * @property RuleGroupSourceStatelessRuleDefinition $RuleDefinition
 */
class RuleGroupSourceStatelessRulesDetails extends Shape
{
    /**
     * @param array{
     *     Priority?: int,
     *     RuleDefinition?: RuleGroupSourceStatelessRuleDefinition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
