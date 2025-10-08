<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrafficMirrorFilterRules;

trait DescribeTrafficMirrorFilterRulesTrait
{
    /**
     * @param DescribeTrafficMirrorFilterRulesRequest $args
     * @return DescribeTrafficMirrorFilterRulesResponse
     */
    public function describeTrafficMirrorFilterRules(DescribeTrafficMirrorFilterRulesRequest $args)
    {
        $result = parent::describeTrafficMirrorFilterRules($args->toArray());
        return new DescribeTrafficMirrorFilterRulesResponse($result->toArray());
    }
}
