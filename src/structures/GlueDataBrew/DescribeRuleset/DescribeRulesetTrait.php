<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeRuleset;

trait DescribeRulesetTrait
{
    /**
     * @param DescribeRulesetRequest $args
     * @return DescribeRulesetResponse
     */
    public function describeRuleset(DescribeRulesetRequest $args)
    {
        $result = parent::describeRuleset($args->toArray());
        return new DescribeRulesetResponse($result->toArray());
    }
}
