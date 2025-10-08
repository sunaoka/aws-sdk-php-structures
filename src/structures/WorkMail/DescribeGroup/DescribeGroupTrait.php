<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeGroup;

trait DescribeGroupTrait
{
    /**
     * @param DescribeGroupRequest $args
     * @return DescribeGroupResponse
     */
    public function describeGroup(DescribeGroupRequest $args)
    {
        $result = parent::describeGroup($args->toArray());
        return new DescribeGroupResponse($result->toArray());
    }
}
