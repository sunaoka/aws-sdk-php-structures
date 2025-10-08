<?php

namespace Sunaoka\Aws\Structures\CognitoSync\GetCognitoEvents;

trait GetCognitoEventsTrait
{
    /**
     * @param GetCognitoEventsRequest $args
     * @return GetCognitoEventsResponse
     */
    public function getCognitoEvents(GetCognitoEventsRequest $args)
    {
        $result = parent::getCognitoEvents($args->toArray());
        return new GetCognitoEventsResponse($result->toArray());
    }
}
