<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSERT'|'DELETE' $Action
 * @property ActivatedRule $ActivatedRule
 */
class RuleGroupUpdate extends Shape
{
    /**
     * @param array{
     *     Action: 'INSERT'|'DELETE',
     *     ActivatedRule: ActivatedRule
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
