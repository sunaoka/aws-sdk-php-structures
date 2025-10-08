<?php

namespace Sunaoka\Aws\Structures\S3Control\PutStorageLensConfigurationTagging;

trait PutStorageLensConfigurationTaggingTrait
{
    /**
     * @param PutStorageLensConfigurationTaggingRequest $args
     * @return PutStorageLensConfigurationTaggingResponse
     */
    public function putStorageLensConfigurationTagging(PutStorageLensConfigurationTaggingRequest $args)
    {
        $result = parent::putStorageLensConfigurationTagging($args->toArray());
        return new PutStorageLensConfigurationTaggingResponse($result->toArray());
    }
}
