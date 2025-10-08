<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DescribePackagingGroup;

trait DescribePackagingGroupTrait
{
    /**
     * @param DescribePackagingGroupRequest $args
     * @return DescribePackagingGroupResponse
     */
    public function describePackagingGroup(DescribePackagingGroupRequest $args)
    {
        $result = parent::describePackagingGroup($args->toArray());
        return new DescribePackagingGroupResponse($result->toArray());
    }
}
