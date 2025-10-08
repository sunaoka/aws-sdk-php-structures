<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetEvents;

trait DescribeFleetEventsTrait
{
    /**
     * @param DescribeFleetEventsRequest $args
     * @return DescribeFleetEventsResponse
     */
    public function describeFleetEvents(DescribeFleetEventsRequest $args)
    {
        $result = parent::describeFleetEvents($args->toArray());
        return new DescribeFleetEventsResponse($result->toArray());
    }
}
