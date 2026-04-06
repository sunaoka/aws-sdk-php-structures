<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeDeclarativePoliciesReports;

trait DescribeDeclarativePoliciesReportsTrait
{
    /**
     * @param DescribeDeclarativePoliciesReportsRequest $args
     * @return DescribeDeclarativePoliciesReportsResponse
     */
    public function describeDeclarativePoliciesReports(DescribeDeclarativePoliciesReportsRequest $args)
    {
        $result = parent::describeDeclarativePoliciesReports($args->toArray());
        return new DescribeDeclarativePoliciesReportsResponse($result->toArray());
    }
}
