<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\UpdateRepository;

trait UpdateRepositoryTrait
{
    /**
     * @param UpdateRepositoryRequest $args
     * @return UpdateRepositoryResponse
     */
    public function updateRepository(UpdateRepositoryRequest $args)
    {
        $result = parent::updateRepository($args->toArray());
        return new UpdateRepositoryResponse($result->toArray());
    }
}
