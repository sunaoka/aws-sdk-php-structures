<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTrafficMirrorFilterRule;

trait DeleteTrafficMirrorFilterRuleTrait
{
    /**
     * @param DeleteTrafficMirrorFilterRuleRequest $args
     * @return DeleteTrafficMirrorFilterRuleResponse
     */
    public function deleteTrafficMirrorFilterRule(DeleteTrafficMirrorFilterRuleRequest $args)
    {
        $result = parent::deleteTrafficMirrorFilterRule($args->toArray());
        return new DeleteTrafficMirrorFilterRuleResponse($result->toArray());
    }
}
