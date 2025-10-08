<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateArtifact;

trait UpdateArtifactTrait
{
    /**
     * @param UpdateArtifactRequest $args
     * @return UpdateArtifactResponse
     */
    public function updateArtifact(UpdateArtifactRequest $args)
    {
        $result = parent::updateArtifact($args->toArray());
        return new UpdateArtifactResponse($result->toArray());
    }
}
