<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateArtifact;

trait CreateArtifactTrait
{
    /**
     * @param CreateArtifactRequest $args
     * @return CreateArtifactResponse
     */
    public function createArtifact(CreateArtifactRequest $args)
    {
        $result = parent::createArtifact($args->toArray());
        return new CreateArtifactResponse($result->toArray());
    }
}
