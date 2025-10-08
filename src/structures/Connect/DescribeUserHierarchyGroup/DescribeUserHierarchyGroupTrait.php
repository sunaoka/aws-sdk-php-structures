<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeUserHierarchyGroup;

trait DescribeUserHierarchyGroupTrait
{
    /**
     * @param DescribeUserHierarchyGroupRequest $args
     * @return DescribeUserHierarchyGroupResponse
     */
    public function describeUserHierarchyGroup(DescribeUserHierarchyGroupRequest $args)
    {
        $result = parent::describeUserHierarchyGroup($args->toArray());
        return new DescribeUserHierarchyGroupResponse($result->toArray());
    }
}
