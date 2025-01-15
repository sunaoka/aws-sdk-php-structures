<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Priority
 * @property string $RuleId
 * @property WafAction|null $Action
 * @property WafOverrideAction|null $OverrideAction
 * @property 'REGULAR'|'RATE_BASED'|'GROUP'|null $Type
 * @property list<ExcludedRule>|null $ExcludedRules
 */
class ActivatedRule extends Shape
{
    /**
     * @param array{
     *     Priority: int,
     *     RuleId: string,
     *     Action?: WafAction|null,
     *     OverrideAction?: WafOverrideAction|null,
     *     Type?: 'REGULAR'|'RATE_BASED'|'GROUP'|null,
     *     ExcludedRules?: list<ExcludedRule>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
