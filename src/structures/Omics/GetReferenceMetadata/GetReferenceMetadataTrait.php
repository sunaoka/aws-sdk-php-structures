<?php

namespace Sunaoka\Aws\Structures\Omics\GetReferenceMetadata;

trait GetReferenceMetadataTrait
{
    /**
     * @param GetReferenceMetadataRequest $args
     * @return GetReferenceMetadataResponse
     */
    public function getReferenceMetadata(GetReferenceMetadataRequest $args)
    {
        $result = parent::getReferenceMetadata($args->toArray());
        return new GetReferenceMetadataResponse($result->toArray());
    }
}
