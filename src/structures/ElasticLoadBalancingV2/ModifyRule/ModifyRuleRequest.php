<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleArn
 * @property list<Shapes\RuleCondition>|null $Conditions
 * @property list<Shapes\Action>|null $Actions
 */
class ModifyRuleRequest extends Request
{
    /**
     * @param array{
     *     RuleArn: string,
     *     Conditions?: list<Shapes\RuleCondition>|null,
     *     Actions?: list<Shapes\Action>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
