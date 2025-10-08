<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteJourney;

trait DeleteJourneyTrait
{
    /**
     * @param DeleteJourneyRequest $args
     * @return DeleteJourneyResponse
     */
    public function deleteJourney(DeleteJourneyRequest $args)
    {
        $result = parent::deleteJourney($args->toArray());
        return new DeleteJourneyResponse($result->toArray());
    }
}
