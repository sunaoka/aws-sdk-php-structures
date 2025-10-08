<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchGetRepositories;

trait BatchGetRepositoriesTrait
{
    /**
     * @param BatchGetRepositoriesRequest $args
     * @return BatchGetRepositoriesResponse
     */
    public function batchGetRepositories(BatchGetRepositoriesRequest $args)
    {
        $result = parent::batchGetRepositories($args->toArray());
        return new BatchGetRepositoriesResponse($result->toArray());
    }
}
