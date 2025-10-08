<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListCreatedArtifacts;

trait ListCreatedArtifactsTrait
{
    /**
     * @param ListCreatedArtifactsRequest $args
     * @return ListCreatedArtifactsResponse
     */
    public function listCreatedArtifacts(ListCreatedArtifactsRequest $args)
    {
        $result = parent::listCreatedArtifacts($args->toArray());
        return new ListCreatedArtifactsResponse($result->toArray());
    }
}
