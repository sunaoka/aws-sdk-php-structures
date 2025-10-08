<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCodeRepository;

trait UpdateCodeRepositoryTrait
{
    /**
     * @param UpdateCodeRepositoryRequest $args
     * @return UpdateCodeRepositoryResponse
     */
    public function updateCodeRepository(UpdateCodeRepositoryRequest $args)
    {
        $result = parent::updateCodeRepository($args->toArray());
        return new UpdateCodeRepositoryResponse($result->toArray());
    }
}
