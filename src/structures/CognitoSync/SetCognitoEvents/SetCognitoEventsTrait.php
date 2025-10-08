<?php

namespace Sunaoka\Aws\Structures\CognitoSync\SetCognitoEvents;

trait SetCognitoEventsTrait
{
    /**
     * @param SetCognitoEventsRequest $args
     * @return void
     */
    public function setCognitoEvents(SetCognitoEventsRequest $args)
    {
        parent::setCognitoEvents($args->toArray());
    }
}
