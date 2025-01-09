<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property list<Shapes\RuleCondition> $Conditions
 * @property int $Priority
 * @property list<Shapes\Action> $Actions
 * @property list<Shapes\Tag> $Tags
 */
class CreateRuleRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     Conditions: list<Shapes\RuleCondition>,
     *     Priority: int,
     *     Actions: list<Shapes\Action>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
