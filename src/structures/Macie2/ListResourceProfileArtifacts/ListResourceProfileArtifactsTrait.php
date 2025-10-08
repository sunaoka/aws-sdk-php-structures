<?php

namespace Sunaoka\Aws\Structures\Macie2\ListResourceProfileArtifacts;

trait ListResourceProfileArtifactsTrait
{
    /**
     * @param ListResourceProfileArtifactsRequest $args
     * @return ListResourceProfileArtifactsResponse
     */
    public function listResourceProfileArtifacts(ListResourceProfileArtifactsRequest $args)
    {
        $result = parent::listResourceProfileArtifacts($args->toArray());
        return new ListResourceProfileArtifactsResponse($result->toArray());
    }
}
