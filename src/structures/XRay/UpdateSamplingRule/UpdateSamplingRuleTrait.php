<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateSamplingRule;

trait UpdateSamplingRuleTrait
{
    /**
     * @param UpdateSamplingRuleRequest $args
     * @return UpdateSamplingRuleResponse
     */
    public function updateSamplingRule(UpdateSamplingRuleRequest $args)
    {
        $result = parent::updateSamplingRule($args->toArray());
        return new UpdateSamplingRuleResponse($result->toArray());
    }
}
