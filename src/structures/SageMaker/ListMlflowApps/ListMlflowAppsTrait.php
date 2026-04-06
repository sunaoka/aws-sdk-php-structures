<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMlflowApps;

trait ListMlflowAppsTrait
{
    /**
     * @param ListMlflowAppsRequest $args
     * @return ListMlflowAppsResponse
     */
    public function listMlflowApps(ListMlflowAppsRequest $args)
    {
        $result = parent::listMlflowApps($args->toArray());
        return new ListMlflowAppsResponse($result->toArray());
    }
}
