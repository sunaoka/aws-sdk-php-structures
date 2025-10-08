<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeOrganizationConfigRules;

trait DescribeOrganizationConfigRulesTrait
{
    /**
     * @param DescribeOrganizationConfigRulesRequest $args
     * @return DescribeOrganizationConfigRulesResponse
     */
    public function describeOrganizationConfigRules(DescribeOrganizationConfigRulesRequest $args)
    {
        $result = parent::describeOrganizationConfigRules($args->toArray());
        return new DescribeOrganizationConfigRulesResponse($result->toArray());
    }
}
