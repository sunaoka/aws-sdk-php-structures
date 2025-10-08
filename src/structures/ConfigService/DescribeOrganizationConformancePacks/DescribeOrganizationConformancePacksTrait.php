<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeOrganizationConformancePacks;

trait DescribeOrganizationConformancePacksTrait
{
    /**
     * @param DescribeOrganizationConformancePacksRequest $args
     * @return DescribeOrganizationConformancePacksResponse
     */
    public function describeOrganizationConformancePacks(DescribeOrganizationConformancePacksRequest $args)
    {
        $result = parent::describeOrganizationConformancePacks($args->toArray());
        return new DescribeOrganizationConformancePacksResponse($result->toArray());
    }
}
