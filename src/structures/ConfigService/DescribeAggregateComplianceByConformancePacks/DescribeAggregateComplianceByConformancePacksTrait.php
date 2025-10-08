<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregateComplianceByConformancePacks;

trait DescribeAggregateComplianceByConformancePacksTrait
{
    /**
     * @param DescribeAggregateComplianceByConformancePacksRequest $args
     * @return DescribeAggregateComplianceByConformancePacksResponse
     */
    public function describeAggregateComplianceByConformancePacks(
        DescribeAggregateComplianceByConformancePacksRequest $args,
    ) {
        $result = parent::describeAggregateComplianceByConformancePacks($args->toArray());
        return new DescribeAggregateComplianceByConformancePacksResponse($result->toArray());
    }
}
