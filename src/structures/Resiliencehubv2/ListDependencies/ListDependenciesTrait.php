<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListDependencies;

trait ListDependenciesTrait
{
    /**
     * @param ListDependenciesRequest $args
     * @return ListDependenciesResponse
     */
    public function listDependencies(ListDependenciesRequest $args)
    {
        $result = parent::listDependencies($args->toArray());
        return new ListDependenciesResponse($result->toArray());
    }
}
