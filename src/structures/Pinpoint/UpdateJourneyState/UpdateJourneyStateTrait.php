<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourneyState;

trait UpdateJourneyStateTrait
{
    /**
     * @param UpdateJourneyStateRequest $args
     * @return UpdateJourneyStateResponse
     */
    public function updateJourneyState(UpdateJourneyStateRequest $args)
    {
        $result = parent::updateJourneyState($args->toArray());
        return new UpdateJourneyStateResponse($result->toArray());
    }
}
