<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleGroupVariables|null $RuleVariables
 * @property RuleGroupSource|null $RulesSource
 */
class RuleGroupDetails extends Shape
{
    /**
     * @param array{
     *     RuleVariables?: RuleGroupVariables|null,
     *     RulesSource?: RuleGroupSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
