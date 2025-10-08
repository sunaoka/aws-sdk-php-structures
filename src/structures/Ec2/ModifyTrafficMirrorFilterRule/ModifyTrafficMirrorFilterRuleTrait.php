<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTrafficMirrorFilterRule;

trait ModifyTrafficMirrorFilterRuleTrait
{
    /**
     * @param ModifyTrafficMirrorFilterRuleRequest $args
     * @return ModifyTrafficMirrorFilterRuleResponse
     */
    public function modifyTrafficMirrorFilterRule(ModifyTrafficMirrorFilterRuleRequest $args)
    {
        $result = parent::modifyTrafficMirrorFilterRule($args->toArray());
        return new ModifyTrafficMirrorFilterRuleResponse($result->toArray());
    }
}
