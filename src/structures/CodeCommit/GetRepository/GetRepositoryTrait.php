<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetRepository;

trait GetRepositoryTrait
{
    /**
     * @param GetRepositoryRequest $args
     * @return GetRepositoryResponse
     */
    public function getRepository(GetRepositoryRequest $args)
    {
        $result = parent::getRepository($args->toArray());
        return new GetRepositoryResponse($result->toArray());
    }
}
