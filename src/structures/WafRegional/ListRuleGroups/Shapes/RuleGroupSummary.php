<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListRuleGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleGroupId
 * @property string $Name
 */
class RuleGroupSummary extends Shape
{
    /**
     * @param array{
     *     RuleGroupId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
