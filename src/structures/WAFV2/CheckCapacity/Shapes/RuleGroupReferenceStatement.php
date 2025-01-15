<?php

namespace Sunaoka\Aws\Structures\WAFV2\CheckCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ARN
 * @property list<ExcludedRule>|null $ExcludedRules
 * @property list<RuleActionOverride>|null $RuleActionOverrides
 */
class RuleGroupReferenceStatement extends Shape
{
    /**
     * @param array{
     *     ARN: string,
     *     ExcludedRules?: list<ExcludedRule>|null,
     *     RuleActionOverrides?: list<RuleActionOverride>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
