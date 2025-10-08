<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingRules;

trait GetSamplingRulesTrait
{
    /**
     * @param GetSamplingRulesRequest $args
     * @return GetSamplingRulesResponse
     */
    public function getSamplingRules(GetSamplingRulesRequest $args)
    {
        $result = parent::getSamplingRules($args->toArray());
        return new GetSamplingRulesResponse($result->toArray());
    }
}
