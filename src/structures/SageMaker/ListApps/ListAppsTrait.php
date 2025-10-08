<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListApps;

trait ListAppsTrait
{
    /**
     * @param ListAppsRequest $args
     * @return ListAppsResponse
     */
    public function listApps(ListAppsRequest $args)
    {
        $result = parent::listApps($args->toArray());
        return new ListAppsResponse($result->toArray());
    }
}
