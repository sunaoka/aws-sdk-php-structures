<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Priority
 * @property RuleGroupSourceStatelessRuleDefinition|null $RuleDefinition
 */
class RuleGroupSourceStatelessRulesDetails extends Shape
{
    /**
     * @param array{
     *     Priority?: int|null,
     *     RuleDefinition?: RuleGroupSourceStatelessRuleDefinition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
