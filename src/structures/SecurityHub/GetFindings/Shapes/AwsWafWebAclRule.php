<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WafAction|null $Action
 * @property list<WafExcludedRule>|null $ExcludedRules
 * @property WafOverrideAction|null $OverrideAction
 * @property int|null $Priority
 * @property string|null $RuleId
 * @property string|null $Type
 */
class AwsWafWebAclRule extends Shape
{
    /**
     * @param array{
     *     Action?: WafAction|null,
     *     ExcludedRules?: list<WafExcludedRule>|null,
     *     OverrideAction?: WafOverrideAction|null,
     *     Priority?: int|null,
     *     RuleId?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
