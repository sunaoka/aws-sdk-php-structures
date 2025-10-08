<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLineageGroup;

trait DescribeLineageGroupTrait
{
    /**
     * @param DescribeLineageGroupRequest $args
     * @return DescribeLineageGroupResponse
     */
    public function describeLineageGroup(DescribeLineageGroupRequest $args)
    {
        $result = parent::describeLineageGroup($args->toArray());
        return new DescribeLineageGroupResponse($result->toArray());
    }
}
