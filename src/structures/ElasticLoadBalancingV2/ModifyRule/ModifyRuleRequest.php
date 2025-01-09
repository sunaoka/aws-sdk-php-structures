<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleArn
 * @property list<Shapes\RuleCondition> $Conditions
 * @property list<Shapes\Action> $Actions
 */
class ModifyRuleRequest extends Request
{
    /**
     * @param array{
     *     RuleArn: string,
     *     Conditions?: list<Shapes\RuleCondition>,
     *     Actions?: list<Shapes\Action>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
