<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeEventTracker;

trait DescribeEventTrackerTrait
{
    /**
     * @param DescribeEventTrackerRequest $args
     * @return DescribeEventTrackerResponse
     */
    public function describeEventTracker(DescribeEventTrackerRequest $args)
    {
        $result = parent::describeEventTracker($args->toArray());
        return new DescribeEventTrackerResponse($result->toArray());
    }
}
