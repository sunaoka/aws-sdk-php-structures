<?php

namespace Sunaoka\Aws\Structures\Ecr\DeletePullThroughCacheRule;

trait DeletePullThroughCacheRuleTrait
{
    /**
     * @param DeletePullThroughCacheRuleRequest $args
     * @return DeletePullThroughCacheRuleResponse
     */
    public function deletePullThroughCacheRule(DeletePullThroughCacheRuleRequest $args)
    {
        $result = parent::deletePullThroughCacheRule($args->toArray());
        return new DeletePullThroughCacheRuleResponse($result->toArray());
    }
}
