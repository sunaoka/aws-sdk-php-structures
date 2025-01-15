<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Action
 * @property RuleGroupSourceStatefulRulesHeaderDetails|null $Header
 * @property list<RuleGroupSourceStatefulRulesOptionsDetails>|null $RuleOptions
 */
class RuleGroupSourceStatefulRulesDetails extends Shape
{
    /**
     * @param array{
     *     Action?: string|null,
     *     Header?: RuleGroupSourceStatefulRulesHeaderDetails|null,
     *     RuleOptions?: list<RuleGroupSourceStatefulRulesOptionsDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
