<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetListsMetadata;

trait GetListsMetadataTrait
{
    /**
     * @param GetListsMetadataRequest $args
     * @return GetListsMetadataResponse
     */
    public function getListsMetadata(GetListsMetadataRequest $args)
    {
        $result = parent::getListsMetadata($args->toArray());
        return new GetListsMetadataResponse($result->toArray());
    }
}
