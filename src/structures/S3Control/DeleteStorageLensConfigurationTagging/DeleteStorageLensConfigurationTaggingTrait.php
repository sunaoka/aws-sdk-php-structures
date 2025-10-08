<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteStorageLensConfigurationTagging;

trait DeleteStorageLensConfigurationTaggingTrait
{
    /**
     * @param DeleteStorageLensConfigurationTaggingRequest $args
     * @return DeleteStorageLensConfigurationTaggingResponse
     */
    public function deleteStorageLensConfigurationTagging(DeleteStorageLensConfigurationTaggingRequest $args)
    {
        $result = parent::deleteStorageLensConfigurationTagging($args->toArray());
        return new DeleteStorageLensConfigurationTaggingResponse($result->toArray());
    }
}
