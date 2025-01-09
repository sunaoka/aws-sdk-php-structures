<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property RuleAction $ActionToUse
 */
class RuleActionOverride extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ActionToUse: RuleAction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
