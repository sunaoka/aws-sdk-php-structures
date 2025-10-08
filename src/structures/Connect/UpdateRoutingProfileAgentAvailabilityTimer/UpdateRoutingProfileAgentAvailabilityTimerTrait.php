<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRoutingProfileAgentAvailabilityTimer;

trait UpdateRoutingProfileAgentAvailabilityTimerTrait
{
    /**
     * @param UpdateRoutingProfileAgentAvailabilityTimerRequest $args
     * @return void
     */
    public function updateRoutingProfileAgentAvailabilityTimer(
        UpdateRoutingProfileAgentAvailabilityTimerRequest $args,
    ) {
        parent::updateRoutingProfileAgentAvailabilityTimer($args->toArray());
    }
}
