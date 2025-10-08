<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetImageSetMetadata;

trait GetImageSetMetadataTrait
{
    /**
     * @param GetImageSetMetadataRequest $args
     * @return GetImageSetMetadataResponse
     */
    public function getImageSetMetadata(GetImageSetMetadataRequest $args)
    {
        $result = parent::getImageSetMetadata($args->toArray());
        return new GetImageSetMetadataResponse($result->toArray());
    }
}
