<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExperimentRunEvents;

trait ListExperimentRunEventsTrait
{
    /**
     * @param ListExperimentRunEventsRequest $args
     * @return ListExperimentRunEventsResponse
     */
    public function listExperimentRunEvents(ListExperimentRunEventsRequest $args)
    {
        $result = parent::listExperimentRunEvents($args->toArray());
        return new ListExperimentRunEventsResponse($result->toArray());
    }
}
