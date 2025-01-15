<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetRulePriorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleArn
 * @property string|null $Priority
 * @property list<RuleCondition>|null $Conditions
 * @property list<Action>|null $Actions
 * @property bool|null $IsDefault
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     RuleArn?: string|null,
     *     Priority?: string|null,
     *     Conditions?: list<RuleCondition>|null,
     *     Actions?: list<Action>|null,
     *     IsDefault?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
