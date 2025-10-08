<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePackCompliance;

trait DescribeConformancePackComplianceTrait
{
    /**
     * @param DescribeConformancePackComplianceRequest $args
     * @return DescribeConformancePackComplianceResponse
     */
    public function describeConformancePackCompliance(DescribeConformancePackComplianceRequest $args)
    {
        $result = parent::describeConformancePackCompliance($args->toArray());
        return new DescribeConformancePackComplianceResponse($result->toArray());
    }
}
