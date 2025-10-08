<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListArtifacts;

trait ListArtifactsTrait
{
    /**
     * @param ListArtifactsRequest $args
     * @return ListArtifactsResponse
     */
    public function listArtifacts(ListArtifactsRequest $args)
    {
        $result = parent::listArtifacts($args->toArray());
        return new ListArtifactsResponse($result->toArray());
    }
}
