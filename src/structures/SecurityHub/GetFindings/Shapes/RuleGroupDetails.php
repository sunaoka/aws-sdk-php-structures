<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleGroupVariables $RuleVariables
 * @property RuleGroupSource $RulesSource
 */
class RuleGroupDetails extends Shape
{
    /**
     * @param array{
     *     RuleVariables?: RuleGroupVariables,
     *     RulesSource?: RuleGroupSource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
