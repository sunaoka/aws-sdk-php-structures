<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetRulePriorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleArn
 * @property string $Priority
 * @property list<RuleCondition> $Conditions
 * @property list<Action> $Actions
 * @property bool $IsDefault
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     RuleArn?: string,
     *     Priority?: string,
     *     Conditions?: list<RuleCondition>,
     *     Actions?: list<Action>,
     *     IsDefault?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
