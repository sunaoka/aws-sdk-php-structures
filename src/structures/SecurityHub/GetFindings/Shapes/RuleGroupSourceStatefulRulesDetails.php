<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Action
 * @property RuleGroupSourceStatefulRulesHeaderDetails $Header
 * @property list<RuleGroupSourceStatefulRulesOptionsDetails> $RuleOptions
 */
class RuleGroupSourceStatefulRulesDetails extends Shape
{
    /**
     * @param array{
     *     Action?: string,
     *     Header?: RuleGroupSourceStatefulRulesHeaderDetails,
     *     RuleOptions?: list<RuleGroupSourceStatefulRulesOptionsDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
