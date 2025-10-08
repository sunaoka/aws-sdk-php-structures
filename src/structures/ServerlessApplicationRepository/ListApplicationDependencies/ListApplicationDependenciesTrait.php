<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\ListApplicationDependencies;

trait ListApplicationDependenciesTrait
{
    /**
     * @param ListApplicationDependenciesRequest $args
     * @return ListApplicationDependenciesResponse
     */
    public function listApplicationDependencies(ListApplicationDependenciesRequest $args)
    {
        $result = parent::listApplicationDependencies($args->toArray());
        return new ListApplicationDependenciesResponse($result->toArray());
    }
}
