<?php

namespace Sunaoka\Aws\Structures\Proton\ListRepositories;

trait ListRepositoriesTrait
{
    /**
     * @param ListRepositoriesRequest $args
     * @return ListRepositoriesResponse
     */
    public function listRepositories(ListRepositoriesRequest $args)
    {
        $result = parent::listRepositories($args->toArray());
        return new ListRepositoriesResponse($result->toArray());
    }
}
