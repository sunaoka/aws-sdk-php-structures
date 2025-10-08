<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListModelManifests;

trait ListModelManifestsTrait
{
    /**
     * @param ListModelManifestsRequest $args
     * @return ListModelManifestsResponse
     */
    public function listModelManifests(ListModelManifestsRequest $args)
    {
        $result = parent::listModelManifests($args->toArray());
        return new ListModelManifestsResponse($result->toArray());
    }
}
