<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\DeleteUserJourney;

trait DeleteUserJourneyTrait
{
    /**
     * @param DeleteUserJourneyRequest $args
     * @return DeleteUserJourneyResponse
     */
    public function deleteUserJourney(DeleteUserJourneyRequest $args)
    {
        $result = parent::deleteUserJourney($args->toArray());
        return new DeleteUserJourneyResponse($result->toArray());
    }
}
