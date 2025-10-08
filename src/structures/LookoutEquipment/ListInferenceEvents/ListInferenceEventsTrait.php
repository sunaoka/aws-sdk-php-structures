<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListInferenceEvents;

trait ListInferenceEventsTrait
{
    /**
     * @param ListInferenceEventsRequest $args
     * @return ListInferenceEventsResponse
     */
    public function listInferenceEvents(ListInferenceEventsRequest $args)
    {
        $result = parent::listInferenceEvents($args->toArray());
        return new ListInferenceEventsResponse($result->toArray());
    }
}
