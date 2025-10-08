<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfigurationTagging;

trait GetStorageLensConfigurationTaggingTrait
{
    /**
     * @param GetStorageLensConfigurationTaggingRequest $args
     * @return GetStorageLensConfigurationTaggingResponse
     */
    public function getStorageLensConfigurationTagging(GetStorageLensConfigurationTaggingRequest $args)
    {
        $result = parent::getStorageLensConfigurationTagging($args->toArray());
        return new GetStorageLensConfigurationTaggingResponse($result->toArray());
    }
}
