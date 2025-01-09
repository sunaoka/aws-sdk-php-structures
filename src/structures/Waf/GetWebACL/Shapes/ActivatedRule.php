<?php

namespace Sunaoka\Aws\Structures\Waf\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Priority
 * @property string $RuleId
 * @property WafAction $Action
 * @property WafOverrideAction $OverrideAction
 * @property 'REGULAR'|'RATE_BASED'|'GROUP' $Type
 * @property list<ExcludedRule> $ExcludedRules
 */
class ActivatedRule extends Shape
{
    /**
     * @param array{
     *     Priority: int,
     *     RuleId: string,
     *     Action?: WafAction,
     *     OverrideAction?: WafOverrideAction,
     *     Type?: 'REGULAR'|'RATE_BASED'|'GROUP',
     *     ExcludedRules?: list<ExcludedRule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
