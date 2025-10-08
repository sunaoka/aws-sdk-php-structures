<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackageGroup;

trait DescribeModelPackageGroupTrait
{
    /**
     * @param DescribeModelPackageGroupRequest $args
     * @return DescribeModelPackageGroupResponse
     */
    public function describeModelPackageGroup(DescribeModelPackageGroupRequest $args)
    {
        $result = parent::describeModelPackageGroup($args->toArray());
        return new DescribeModelPackageGroupResponse($result->toArray());
    }
}
