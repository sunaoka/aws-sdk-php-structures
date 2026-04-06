<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleArn
 * @property list<Shapes\RuleCondition>|null $Conditions
 * @property list<Shapes\Action>|null $Actions
 * @property list<Shapes\RuleTransform>|null $Transforms
 * @property bool|null $ResetTransforms
 */
class ModifyRuleRequest extends Request
{
    /**
     * @param array{
     *     RuleArn: string,
     *     Conditions?: list<Shapes\RuleCondition>|null,
     *     Actions?: list<Shapes\Action>|null,
     *     Transforms?: list<Shapes\RuleTransform>|null,
     *     ResetTransforms?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
