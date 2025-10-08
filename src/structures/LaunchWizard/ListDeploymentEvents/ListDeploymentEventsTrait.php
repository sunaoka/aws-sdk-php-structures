<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListDeploymentEvents;

trait ListDeploymentEventsTrait
{
    /**
     * @param ListDeploymentEventsRequest $args
     * @return ListDeploymentEventsResponse
     */
    public function listDeploymentEvents(ListDeploymentEventsRequest $args)
    {
        $result = parent::listDeploymentEvents($args->toArray());
        return new ListDeploymentEventsResponse($result->toArray());
    }
}
