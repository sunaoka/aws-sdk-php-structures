<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourney;

trait UpdateJourneyTrait
{
    /**
     * @param UpdateJourneyRequest $args
     * @return UpdateJourneyResponse
     */
    public function updateJourney(UpdateJourneyRequest $args)
    {
        $result = parent::updateJourney($args->toArray());
        return new UpdateJourneyResponse($result->toArray());
    }
}
