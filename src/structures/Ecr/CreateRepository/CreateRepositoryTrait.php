<?php

namespace Sunaoka\Aws\Structures\Ecr\CreateRepository;

trait CreateRepositoryTrait
{
    /**
     * @param CreateRepositoryRequest $args
     * @return CreateRepositoryResponse
     */
    public function createRepository(CreateRepositoryRequest $args)
    {
        $result = parent::createRepository($args->toArray());
        return new CreateRepositoryResponse($result->toArray());
    }
}
