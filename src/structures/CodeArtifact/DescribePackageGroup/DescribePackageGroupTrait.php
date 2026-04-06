<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DescribePackageGroup;

trait DescribePackageGroupTrait
{
    /**
     * @param DescribePackageGroupRequest $args
     * @return DescribePackageGroupResponse
     */
    public function describePackageGroup(DescribePackageGroupRequest $args)
    {
        $result = parent::describePackageGroup($args->toArray());
        return new DescribePackageGroupResponse($result->toArray());
    }
}
