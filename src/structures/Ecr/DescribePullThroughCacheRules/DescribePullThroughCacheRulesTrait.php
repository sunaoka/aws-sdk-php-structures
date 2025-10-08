<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribePullThroughCacheRules;

trait DescribePullThroughCacheRulesTrait
{
    /**
     * @param DescribePullThroughCacheRulesRequest $args
     * @return DescribePullThroughCacheRulesResponse
     */
    public function describePullThroughCacheRules(DescribePullThroughCacheRulesRequest $args)
    {
        $result = parent::describePullThroughCacheRules($args->toArray());
        return new DescribePullThroughCacheRulesResponse($result->toArray());
    }
}
