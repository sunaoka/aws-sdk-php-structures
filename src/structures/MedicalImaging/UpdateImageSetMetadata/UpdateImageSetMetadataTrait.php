<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\UpdateImageSetMetadata;

trait UpdateImageSetMetadataTrait
{
    /**
     * @param UpdateImageSetMetadataRequest $args
     * @return UpdateImageSetMetadataResponse
     */
    public function updateImageSetMetadata(UpdateImageSetMetadataRequest $args)
    {
        $result = parent::updateImageSetMetadata($args->toArray());
        return new UpdateImageSetMetadataResponse($result->toArray());
    }
}
