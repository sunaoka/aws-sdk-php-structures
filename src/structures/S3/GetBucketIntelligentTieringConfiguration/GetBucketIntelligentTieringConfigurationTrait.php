<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketIntelligentTieringConfiguration;

trait GetBucketIntelligentTieringConfigurationTrait
{
    /**
     * @param GetBucketIntelligentTieringConfigurationRequest $args
     * @return GetBucketIntelligentTieringConfigurationResponse
     */
    public function getBucketIntelligentTieringConfiguration(GetBucketIntelligentTieringConfigurationRequest $args)
    {
        $result = parent::getBucketIntelligentTieringConfiguration($args->toArray());
        return new GetBucketIntelligentTieringConfigurationResponse($result->toArray());
    }
}
