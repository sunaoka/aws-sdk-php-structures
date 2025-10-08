<?php

namespace Sunaoka\Aws\Structures\XRay\DeleteSamplingRule;

trait DeleteSamplingRuleTrait
{
    /**
     * @param DeleteSamplingRuleRequest $args
     * @return DeleteSamplingRuleResponse
     */
    public function deleteSamplingRule(DeleteSamplingRuleRequest $args)
    {
        $result = parent::deleteSamplingRule($args->toArray());
        return new DeleteSamplingRuleResponse($result->toArray());
    }
}
