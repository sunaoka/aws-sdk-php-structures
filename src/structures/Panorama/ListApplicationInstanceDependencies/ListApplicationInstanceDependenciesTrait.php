<?php

namespace Sunaoka\Aws\Structures\Panorama\ListApplicationInstanceDependencies;

trait ListApplicationInstanceDependenciesTrait
{
    /**
     * @param ListApplicationInstanceDependenciesRequest $args
     * @return ListApplicationInstanceDependenciesResponse
     */
    public function listApplicationInstanceDependencies(ListApplicationInstanceDependenciesRequest $args)
    {
        $result = parent::listApplicationInstanceDependencies($args->toArray());
        return new ListApplicationInstanceDependenciesResponse($result->toArray());
    }
}
