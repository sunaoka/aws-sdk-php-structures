<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeOrganizationOverview;

trait DescribeOrganizationOverviewTrait
{
    /**
     * @param DescribeOrganizationOverviewRequest $args
     * @return DescribeOrganizationOverviewResponse
     */
    public function describeOrganizationOverview(DescribeOrganizationOverviewRequest $args)
    {
        $result = parent::describeOrganizationOverview($args->toArray());
        return new DescribeOrganizationOverviewResponse($result->toArray());
    }
}
