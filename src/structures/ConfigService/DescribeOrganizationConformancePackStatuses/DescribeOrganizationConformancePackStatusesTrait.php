<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeOrganizationConformancePackStatuses;

trait DescribeOrganizationConformancePackStatusesTrait
{
    /**
     * @param DescribeOrganizationConformancePackStatusesRequest $args
     * @return DescribeOrganizationConformancePackStatusesResponse
     */
    public function describeOrganizationConformancePackStatuses(DescribeOrganizationConformancePackStatusesRequest $args)
    {
        $result = parent::describeOrganizationConformancePackStatuses($args->toArray());
        return new DescribeOrganizationConformancePackStatusesResponse($result->toArray());
    }
}
