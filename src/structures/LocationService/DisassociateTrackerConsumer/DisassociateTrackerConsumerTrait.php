<?php

namespace Sunaoka\Aws\Structures\LocationService\DisassociateTrackerConsumer;

trait DisassociateTrackerConsumerTrait
{
    /**
     * @param DisassociateTrackerConsumerRequest $args
     * @return DisassociateTrackerConsumerResponse
     */
    public function disassociateTrackerConsumer(DisassociateTrackerConsumerRequest $args)
    {
        $result = parent::disassociateTrackerConsumer($args->toArray());
        return new DisassociateTrackerConsumerResponse($result->toArray());
    }
}
