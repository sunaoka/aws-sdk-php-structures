<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetComponentVersionArtifact;

trait GetComponentVersionArtifactTrait
{
    /**
     * @param GetComponentVersionArtifactRequest $args
     * @return GetComponentVersionArtifactResponse
     */
    public function getComponentVersionArtifact(GetComponentVersionArtifactRequest $args)
    {
        $result = parent::getComponentVersionArtifact($args->toArray());
        return new GetComponentVersionArtifactResponse($result->toArray());
    }
}
