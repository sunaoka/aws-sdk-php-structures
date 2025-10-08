<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateDecoderManifest;

trait CreateDecoderManifestTrait
{
    /**
     * @param CreateDecoderManifestRequest $args
     * @return CreateDecoderManifestResponse
     */
    public function createDecoderManifest(CreateDecoderManifestRequest $args)
    {
        $result = parent::createDecoderManifest($args->toArray());
        return new CreateDecoderManifestResponse($result->toArray());
    }
}
