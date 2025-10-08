<?php

namespace Sunaoka\Aws\Structures\S3\DeleteBucketIntelligentTieringConfiguration;

trait DeleteBucketIntelligentTieringConfigurationTrait
{
    /**
     * @param DeleteBucketIntelligentTieringConfigurationRequest $args
     * @return void
     */
    public function deleteBucketIntelligentTieringConfiguration(DeleteBucketIntelligentTieringConfigurationRequest $args)
    {
        parent::deleteBucketIntelligentTieringConfiguration($args->toArray());
    }
}
