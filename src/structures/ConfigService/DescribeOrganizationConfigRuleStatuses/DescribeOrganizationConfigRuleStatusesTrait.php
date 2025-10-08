<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeOrganizationConfigRuleStatuses;

trait DescribeOrganizationConfigRuleStatusesTrait
{
    /**
     * @param DescribeOrganizationConfigRuleStatusesRequest $args
     * @return DescribeOrganizationConfigRuleStatusesResponse
     */
    public function describeOrganizationConfigRuleStatuses(DescribeOrganizationConfigRuleStatusesRequest $args)
    {
        $result = parent::describeOrganizationConfigRuleStatuses($args->toArray());
        return new DescribeOrganizationConfigRuleStatusesResponse($result->toArray());
    }
}
