<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\AddArtifact;

trait AddArtifactTrait
{
    /**
     * @param AddArtifactRequest $args
     * @return AddArtifactResponse
     */
    public function addArtifact(AddArtifactRequest $args)
    {
        $result = parent::addArtifact($args->toArray());
        return new AddArtifactResponse($result->toArray());
    }
}
