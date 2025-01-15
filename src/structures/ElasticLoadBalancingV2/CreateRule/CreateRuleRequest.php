<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property list<Shapes\RuleCondition> $Conditions
 * @property int<1, 50000> $Priority
 * @property list<Shapes\Action> $Actions
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateRuleRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     Conditions: list<Shapes\RuleCondition>,
     *     Priority: int<1, 50000>,
     *     Actions: list<Shapes\Action>,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
