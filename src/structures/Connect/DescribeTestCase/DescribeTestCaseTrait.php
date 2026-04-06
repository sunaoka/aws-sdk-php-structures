<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeTestCase;

trait DescribeTestCaseTrait
{
    /**
     * @param DescribeTestCaseRequest $args
     * @return DescribeTestCaseResponse
     */
    public function describeTestCase(DescribeTestCaseRequest $args)
    {
        $result = parent::describeTestCase($args->toArray());
        return new DescribeTestCaseResponse($result->toArray());
    }
}
