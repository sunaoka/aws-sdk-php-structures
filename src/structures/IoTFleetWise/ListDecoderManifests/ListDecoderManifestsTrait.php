<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifests;

trait ListDecoderManifestsTrait
{
    /**
     * @param ListDecoderManifestsRequest $args
     * @return ListDecoderManifestsResponse
     */
    public function listDecoderManifests(ListDecoderManifestsRequest $args)
    {
        $result = parent::listDecoderManifests($args->toArray());
        return new ListDecoderManifestsResponse($result->toArray());
    }
}
