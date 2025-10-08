<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateDecoderManifest;

trait UpdateDecoderManifestTrait
{
    /**
     * @param UpdateDecoderManifestRequest $args
     * @return UpdateDecoderManifestResponse
     */
    public function updateDecoderManifest(UpdateDecoderManifestRequest $args)
    {
        $result = parent::updateDecoderManifest($args->toArray());
        return new UpdateDecoderManifestResponse($result->toArray());
    }
}
