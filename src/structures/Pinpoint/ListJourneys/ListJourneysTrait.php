<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListJourneys;

trait ListJourneysTrait
{
    /**
     * @param ListJourneysRequest $args
     * @return ListJourneysResponse
     */
    public function listJourneys(ListJourneysRequest $args)
    {
        $result = parent::listJourneys($args->toArray());
        return new ListJourneysResponse($result->toArray());
    }
}
