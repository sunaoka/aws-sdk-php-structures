<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceSqlHaStates;

trait DescribeInstanceSqlHaStatesTrait
{
    /**
     * @param DescribeInstanceSqlHaStatesRequest $args
     * @return DescribeInstanceSqlHaStatesResponse
     */
    public function describeInstanceSqlHaStates(DescribeInstanceSqlHaStatesRequest $args)
    {
        $result = parent::describeInstanceSqlHaStates($args->toArray());
        return new DescribeInstanceSqlHaStatesResponse($result->toArray());
    }
}
