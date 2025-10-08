<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTrafficMirrorFilterRule;

trait CreateTrafficMirrorFilterRuleTrait
{
    /**
     * @param CreateTrafficMirrorFilterRuleRequest $args
     * @return CreateTrafficMirrorFilterRuleResponse
     */
    public function createTrafficMirrorFilterRule(CreateTrafficMirrorFilterRuleRequest $args)
    {
        $result = parent::createTrafficMirrorFilterRule($args->toArray());
        return new CreateTrafficMirrorFilterRuleResponse($result->toArray());
    }
}
