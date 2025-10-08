<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListSourceRepositories;

trait ListSourceRepositoriesTrait
{
    /**
     * @param ListSourceRepositoriesRequest $args
     * @return ListSourceRepositoriesResponse
     */
    public function listSourceRepositories(ListSourceRepositoriesRequest $args)
    {
        $result = parent::listSourceRepositories($args->toArray());
        return new ListSourceRepositoriesResponse($result->toArray());
    }
}
