<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridSessionArtifacts;

trait ListTestGridSessionArtifactsTrait
{
    /**
     * @param ListTestGridSessionArtifactsRequest $args
     * @return ListTestGridSessionArtifactsResponse
     */
    public function listTestGridSessionArtifacts(ListTestGridSessionArtifactsRequest $args)
    {
        $result = parent::listTestGridSessionArtifacts($args->toArray());
        return new ListTestGridSessionArtifactsResponse($result->toArray());
    }
}
