<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRunDependencies;

trait ListTestRunDependenciesTrait
{
    /**
     * @param ListTestRunDependenciesRequest $args
     * @return ListTestRunDependenciesResponse
     */
    public function listTestRunDependencies(ListTestRunDependenciesRequest $args)
    {
        $result = parent::listTestRunDependencies($args->toArray());
        return new ListTestRunDependenciesResponse($result->toArray());
    }
}
