<?php

namespace Sunaoka\Aws\Structures\LocationService\AssociateTrackerConsumer;

trait AssociateTrackerConsumerTrait
{
    /**
     * @param AssociateTrackerConsumerRequest $args
     * @return AssociateTrackerConsumerResponse
     */
    public function associateTrackerConsumer(AssociateTrackerConsumerRequest $args)
    {
        $result = parent::associateTrackerConsumer($args->toArray());
        return new AssociateTrackerConsumerResponse($result->toArray());
    }
}
