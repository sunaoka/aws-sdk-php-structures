<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeMatchmakingRuleSets;

trait DescribeMatchmakingRuleSetsTrait
{
    /**
     * @param DescribeMatchmakingRuleSetsRequest $args
     * @return DescribeMatchmakingRuleSetsResponse
     */
    public function describeMatchmakingRuleSets(DescribeMatchmakingRuleSetsRequest $args)
    {
        $result = parent::describeMatchmakingRuleSets($args->toArray());
        return new DescribeMatchmakingRuleSetsResponse($result->toArray());
    }
}
