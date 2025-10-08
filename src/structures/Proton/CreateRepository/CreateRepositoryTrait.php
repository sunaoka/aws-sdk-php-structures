<?php

namespace Sunaoka\Aws\Structures\Proton\CreateRepository;

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
