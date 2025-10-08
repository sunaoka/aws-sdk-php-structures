<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventTypes;

trait GetEventTypesTrait
{
    /**
     * @param GetEventTypesRequest $args
     * @return GetEventTypesResponse
     */
    public function getEventTypes(GetEventTypesRequest $args)
    {
        $result = parent::getEventTypes($args->toArray());
        return new GetEventTypesResponse($result->toArray());
    }
}
