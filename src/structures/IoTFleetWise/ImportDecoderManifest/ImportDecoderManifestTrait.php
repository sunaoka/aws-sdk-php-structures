<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ImportDecoderManifest;

trait ImportDecoderManifestTrait
{
    /**
     * @param ImportDecoderManifestRequest $args
     * @return ImportDecoderManifestResponse
     */
    public function importDecoderManifest(ImportDecoderManifestRequest $args)
    {
        $result = parent::importDecoderManifest($args->toArray());
        return new ImportDecoderManifestResponse($result->toArray());
    }
}
