<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourney;

trait GetJourneyTrait
{
    /**
     * @param GetJourneyRequest $args
     * @return GetJourneyResponse
     */
    public function getJourney(GetJourneyRequest $args)
    {
        $result = parent::getJourney($args->toArray());
        return new GetJourneyResponse($result->toArray());
    }
}
