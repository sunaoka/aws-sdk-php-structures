<?php

namespace Sunaoka\Aws\Structures\XRay\CreateSamplingRule;

trait CreateSamplingRuleTrait
{
    /**
     * @param CreateSamplingRuleRequest $args
     * @return CreateSamplingRuleResponse
     */
    public function createSamplingRule(CreateSamplingRuleRequest $args)
    {
        $result = parent::createSamplingRule($args->toArray());
        return new CreateSamplingRuleResponse($result->toArray());
    }
}
