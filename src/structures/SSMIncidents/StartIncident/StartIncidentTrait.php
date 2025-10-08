<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\StartIncident;

trait StartIncidentTrait
{
    /**
     * @param StartIncidentRequest $args
     * @return StartIncidentResponse
     */
    public function startIncident(StartIncidentRequest $args)
    {
        $result = parent::startIncident($args->toArray());
        return new StartIncidentResponse($result->toArray());
    }
}
