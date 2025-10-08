<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetDecoderManifest;

trait GetDecoderManifestTrait
{
    /**
     * @param GetDecoderManifestRequest $args
     * @return GetDecoderManifestResponse
     */
    public function getDecoderManifest(GetDecoderManifestRequest $args)
    {
        $result = parent::getDecoderManifest($args->toArray());
        return new GetDecoderManifestResponse($result->toArray());
    }
}
