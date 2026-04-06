<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\DeleteArtifact;

trait DeleteArtifactTrait
{
    /**
     * @param DeleteArtifactRequest $args
     * @return DeleteArtifactResponse
     */
    public function deleteArtifact(DeleteArtifactRequest $args)
    {
        $result = parent::deleteArtifact($args->toArray());
        return new DeleteArtifactResponse($result->toArray());
    }
}
