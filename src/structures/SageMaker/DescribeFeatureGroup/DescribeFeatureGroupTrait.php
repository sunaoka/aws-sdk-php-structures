<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFeatureGroup;

trait DescribeFeatureGroupTrait
{
    /**
     * @param DescribeFeatureGroupRequest $args
     * @return DescribeFeatureGroupResponse
     */
    public function describeFeatureGroup(DescribeFeatureGroupRequest $args)
    {
        $result = parent::describeFeatureGroup($args->toArray());
        return new DescribeFeatureGroupResponse($result->toArray());
    }
}
