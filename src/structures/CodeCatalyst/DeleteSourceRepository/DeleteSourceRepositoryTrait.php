<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\DeleteSourceRepository;

trait DeleteSourceRepositoryTrait
{
    /**
     * @param DeleteSourceRepositoryRequest $args
     * @return DeleteSourceRepositoryResponse
     */
    public function deleteSourceRepository(DeleteSourceRepositoryRequest $args)
    {
        $result = parent::deleteSourceRepository($args->toArray());
        return new DeleteSourceRepositoryResponse($result->toArray());
    }
}
