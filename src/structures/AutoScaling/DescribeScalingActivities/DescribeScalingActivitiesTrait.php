<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeScalingActivities;

trait DescribeScalingActivitiesTrait
{
    /**
     * @param DescribeScalingActivitiesRequest $args
     * @return DescribeScalingActivitiesResponse
     */
    public function describeScalingActivities(DescribeScalingActivitiesRequest $args)
    {
        $result = parent::describeScalingActivities($args->toArray());
        return new DescribeScalingActivitiesResponse($result->toArray());
    }
}
