<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WafAction $Action
 * @property list<WafExcludedRule> $ExcludedRules
 * @property WafOverrideAction $OverrideAction
 * @property int $Priority
 * @property string $RuleId
 * @property string $Type
 */
class AwsWafWebAclRule extends Shape
{
    /**
     * @param array{
     *     Action?: WafAction,
     *     ExcludedRules?: list<WafExcludedRule>,
     *     OverrideAction?: WafOverrideAction,
     *     Priority?: int,
     *     RuleId?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
