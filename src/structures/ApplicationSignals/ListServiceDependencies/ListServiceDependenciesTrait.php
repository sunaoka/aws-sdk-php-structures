<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceDependencies;

trait ListServiceDependenciesTrait
{
    /**
     * @param ListServiceDependenciesRequest $args
     * @return ListServiceDependenciesResponse
     */
    public function listServiceDependencies(ListServiceDependenciesRequest $args)
    {
        $result = parent::listServiceDependencies($args->toArray());
        return new ListServiceDependenciesResponse($result->toArray());
    }
}
