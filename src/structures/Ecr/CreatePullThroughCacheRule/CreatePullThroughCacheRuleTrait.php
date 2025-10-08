<?php

namespace Sunaoka\Aws\Structures\Ecr\CreatePullThroughCacheRule;

trait CreatePullThroughCacheRuleTrait
{
    /**
     * @param CreatePullThroughCacheRuleRequest $args
     * @return CreatePullThroughCacheRuleResponse
     */
    public function createPullThroughCacheRule(CreatePullThroughCacheRuleRequest $args)
    {
        $result = parent::createPullThroughCacheRule($args->toArray());
        return new CreatePullThroughCacheRuleResponse($result->toArray());
    }
}
