<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\GetArtifact;

trait GetArtifactTrait
{
    /**
     * @param GetArtifactRequest $args
     * @return GetArtifactResponse
     */
    public function getArtifact(GetArtifactRequest $args)
    {
        $result = parent::getArtifact($args->toArray());
        return new GetArtifactResponse($result->toArray());
    }
}
