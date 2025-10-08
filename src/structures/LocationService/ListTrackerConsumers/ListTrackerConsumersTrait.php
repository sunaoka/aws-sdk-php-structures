<?php

namespace Sunaoka\Aws\Structures\LocationService\ListTrackerConsumers;

trait ListTrackerConsumersTrait
{
    /**
     * @param ListTrackerConsumersRequest $args
     * @return ListTrackerConsumersResponse
     */
    public function listTrackerConsumers(ListTrackerConsumersRequest $args)
    {
        $result = parent::listTrackerConsumers($args->toArray());
        return new ListTrackerConsumersResponse($result->toArray());
    }
}
