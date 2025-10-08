<?php

namespace Sunaoka\Aws\Structures\Ecr\UpdatePullThroughCacheRule;

trait UpdatePullThroughCacheRuleTrait
{
    /**
     * @param UpdatePullThroughCacheRuleRequest $args
     * @return UpdatePullThroughCacheRuleResponse
     */
    public function updatePullThroughCacheRule(UpdatePullThroughCacheRuleRequest $args)
    {
        $result = parent::updatePullThroughCacheRule($args->toArray());
        return new UpdatePullThroughCacheRuleResponse($result->toArray());
    }
}
