<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateDetectorVersionMetadata;

trait UpdateDetectorVersionMetadataTrait
{
    /**
     * @param UpdateDetectorVersionMetadataRequest $args
     * @return UpdateDetectorVersionMetadataResponse
     */
    public function updateDetectorVersionMetadata(UpdateDetectorVersionMetadataRequest $args)
    {
        $result = parent::updateDetectorVersionMetadata($args->toArray());
        return new UpdateDetectorVersionMetadataResponse($result->toArray());
    }
}
