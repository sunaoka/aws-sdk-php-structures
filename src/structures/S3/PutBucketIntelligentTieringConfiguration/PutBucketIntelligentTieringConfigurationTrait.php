<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketIntelligentTieringConfiguration;

trait PutBucketIntelligentTieringConfigurationTrait
{
    /**
     * @param PutBucketIntelligentTieringConfigurationRequest $args
     * @return void
     */
    public function putBucketIntelligentTieringConfiguration(PutBucketIntelligentTieringConfigurationRequest $args)
    {
        parent::putBucketIntelligentTieringConfiguration($args->toArray());
    }
}
