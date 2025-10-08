<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteRepository;

trait DeleteRepositoryTrait
{
    /**
     * @param DeleteRepositoryRequest $args
     * @return DeleteRepositoryResponse
     */
    public function deleteRepository(DeleteRepositoryRequest $args)
    {
        $result = parent::deleteRepository($args->toArray());
        return new DeleteRepositoryResponse($result->toArray());
    }
}
