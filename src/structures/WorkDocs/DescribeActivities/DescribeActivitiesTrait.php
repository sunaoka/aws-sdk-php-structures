<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeActivities;

trait DescribeActivitiesTrait
{
    /**
     * @param DescribeActivitiesRequest $args
     * @return DescribeActivitiesResponse
     */
    public function describeActivities(DescribeActivitiesRequest $args)
    {
        $result = parent::describeActivities($args->toArray());
        return new DescribeActivitiesResponse($result->toArray());
    }
}
