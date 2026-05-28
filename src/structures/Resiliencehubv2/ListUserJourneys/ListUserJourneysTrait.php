<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListUserJourneys;

trait ListUserJourneysTrait
{
    /**
     * @param ListUserJourneysRequest $args
     * @return ListUserJourneysResponse
     */
    public function listUserJourneys(ListUserJourneysRequest $args)
    {
        $result = parent::listUserJourneys($args->toArray());
        return new ListUserJourneysResponse($result->toArray());
    }
}
