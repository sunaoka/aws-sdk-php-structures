<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateUserJourney;

trait CreateUserJourneyTrait
{
    /**
     * @param CreateUserJourneyRequest $args
     * @return CreateUserJourneyResponse
     */
    public function createUserJourney(CreateUserJourneyRequest $args)
    {
        $result = parent::createUserJourney($args->toArray());
        return new CreateUserJourneyResponse($result->toArray());
    }
}
