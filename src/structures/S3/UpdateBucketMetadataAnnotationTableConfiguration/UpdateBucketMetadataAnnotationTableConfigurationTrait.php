<?php

namespace Sunaoka\Aws\Structures\S3\UpdateBucketMetadataAnnotationTableConfiguration;

trait UpdateBucketMetadataAnnotationTableConfigurationTrait
{
    /**
     * @param UpdateBucketMetadataAnnotationTableConfigurationRequest $args
     * @return void
     */
    public function updateBucketMetadataAnnotationTableConfiguration(UpdateBucketMetadataAnnotationTableConfigurationRequest $args)
    {
        parent::updateBucketMetadataAnnotationTableConfiguration($args->toArray());
    }
}
