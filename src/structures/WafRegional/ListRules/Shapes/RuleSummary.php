<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleId
 * @property string $Name
 */
class RuleSummary extends Shape
{
    /**
     * @param array{
     *     RuleId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
