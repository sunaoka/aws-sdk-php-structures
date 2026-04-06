<?php

namespace Sunaoka\Aws\Structures\Ecr\ValidatePullThroughCacheRule;

trait ValidatePullThroughCacheRuleTrait
{
    /**
     * @param ValidatePullThroughCacheRuleRequest $args
     * @return ValidatePullThroughCacheRuleResponse
     */
    public function validatePullThroughCacheRule(ValidatePullThroughCacheRuleRequest $args)
    {
        $result = parent::validatePullThroughCacheRule($args->toArray());
        return new ValidatePullThroughCacheRuleResponse($result->toArray());
    }
}
