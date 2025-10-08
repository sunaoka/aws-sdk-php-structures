<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateJourney;

trait CreateJourneyTrait
{
    /**
     * @param CreateJourneyRequest $args
     * @return CreateJourneyResponse
     */
    public function createJourney(CreateJourneyRequest $args)
    {
        $result = parent::createJourney($args->toArray());
        return new CreateJourneyResponse($result->toArray());
    }
}
