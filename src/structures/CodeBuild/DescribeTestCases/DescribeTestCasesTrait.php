<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DescribeTestCases;

trait DescribeTestCasesTrait
{
    /**
     * @param DescribeTestCasesRequest $args
     * @return DescribeTestCasesResponse
     */
    public function describeTestCases(DescribeTestCasesRequest $args)
    {
        $result = parent::describeTestCases($args->toArray());
        return new DescribeTestCasesResponse($result->toArray());
    }
}
