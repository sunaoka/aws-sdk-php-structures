<?php

namespace Sunaoka\Aws\Structures\Deadline\ListStepDependencies;

trait ListStepDependenciesTrait
{
    /**
     * @param ListStepDependenciesRequest $args
     * @return ListStepDependenciesResponse
     */
    public function listStepDependencies(ListStepDependenciesRequest $args)
    {
        $result = parent::listStepDependencies($args->toArray());
        return new ListStepDependenciesResponse($result->toArray());
    }
}
