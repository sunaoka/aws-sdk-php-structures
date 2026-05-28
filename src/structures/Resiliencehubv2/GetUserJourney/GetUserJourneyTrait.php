<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetUserJourney;

trait GetUserJourneyTrait
{
    /**
     * @param GetUserJourneyRequest $args
     * @return GetUserJourneyResponse
     */
    public function getUserJourney(GetUserJourneyRequest $args)
    {
        $result = parent::getUserJourney($args->toArray());
        return new GetUserJourneyResponse($result->toArray());
    }
}
