<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateUserJourney;

trait UpdateUserJourneyTrait
{
    /**
     * @param UpdateUserJourneyRequest $args
     * @return UpdateUserJourneyResponse
     */
    public function updateUserJourney(UpdateUserJourneyRequest $args)
    {
        $result = parent::updateUserJourney($args->toArray());
        return new UpdateUserJourneyResponse($result->toArray());
    }
}
