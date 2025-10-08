<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCodeRepositories;

trait ListCodeRepositoriesTrait
{
    /**
     * @param ListCodeRepositoriesRequest $args
     * @return ListCodeRepositoriesResponse
     */
    public function listCodeRepositories(ListCodeRepositoriesRequest $args)
    {
        $result = parent::listCodeRepositories($args->toArray());
        return new ListCodeRepositoriesResponse($result->toArray());
    }
}
