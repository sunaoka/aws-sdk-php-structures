<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\CreateSourceRepository;

trait CreateSourceRepositoryTrait
{
    /**
     * @param CreateSourceRepositoryRequest $args
     * @return CreateSourceRepositoryResponse
     */
    public function createSourceRepository(CreateSourceRepositoryRequest $args)
    {
        $result = parent::createSourceRepository($args->toArray());
        return new CreateSourceRepositoryResponse($result->toArray());
    }
}
