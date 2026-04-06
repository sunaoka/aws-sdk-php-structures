<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceSqlHaHistoryStates;

trait DescribeInstanceSqlHaHistoryStatesTrait
{
    /**
     * @param DescribeInstanceSqlHaHistoryStatesRequest $args
     * @return DescribeInstanceSqlHaHistoryStatesResponse
     */
    public function describeInstanceSqlHaHistoryStates(DescribeInstanceSqlHaHistoryStatesRequest $args)
    {
        $result = parent::describeInstanceSqlHaHistoryStates($args->toArray());
        return new DescribeInstanceSqlHaHistoryStatesResponse($result->toArray());
    }
}
