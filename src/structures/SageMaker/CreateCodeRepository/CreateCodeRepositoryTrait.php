<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCodeRepository;

trait CreateCodeRepositoryTrait
{
    /**
     * @param CreateCodeRepositoryRequest $args
     * @return CreateCodeRepositoryResponse
     */
    public function createCodeRepository(CreateCodeRepositoryRequest $args)
    {
        $result = parent::createCodeRepository($args->toArray());
        return new CreateCodeRepositoryResponse($result->toArray());
    }
}
