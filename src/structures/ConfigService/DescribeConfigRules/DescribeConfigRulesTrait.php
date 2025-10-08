<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRules;

trait DescribeConfigRulesTrait
{
    /**
     * @param DescribeConfigRulesRequest $args
     * @return DescribeConfigRulesResponse
     */
    public function describeConfigRules(DescribeConfigRulesRequest $args)
    {
        $result = parent::describeConfigRules($args->toArray());
        return new DescribeConfigRulesResponse($result->toArray());
    }
}
