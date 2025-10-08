<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeTracker;

trait DescribeTrackerTrait
{
    /**
     * @param DescribeTrackerRequest $args
     * @return DescribeTrackerResponse
     */
    public function describeTracker(DescribeTrackerRequest $args)
    {
        $result = parent::describeTracker($args->toArray());
        return new DescribeTrackerResponse($result->toArray());
    }
}
