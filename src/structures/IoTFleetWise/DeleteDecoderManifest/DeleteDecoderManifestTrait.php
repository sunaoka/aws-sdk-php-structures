<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\DeleteDecoderManifest;

trait DeleteDecoderManifestTrait
{
    /**
     * @param DeleteDecoderManifestRequest $args
     * @return DeleteDecoderManifestResponse
     */
    public function deleteDecoderManifest(DeleteDecoderManifestRequest $args)
    {
        $result = parent::deleteDecoderManifest($args->toArray());
        return new DeleteDecoderManifestResponse($result->toArray());
    }
}
