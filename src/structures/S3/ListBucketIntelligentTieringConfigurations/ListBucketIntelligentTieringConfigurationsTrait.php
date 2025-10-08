<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketIntelligentTieringConfigurations;

trait ListBucketIntelligentTieringConfigurationsTrait
{
    /**
     * @param ListBucketIntelligentTieringConfigurationsRequest $args
     * @return ListBucketIntelligentTieringConfigurationsResponse
     */
    public function listBucketIntelligentTieringConfigurations(ListBucketIntelligentTieringConfigurationsRequest $args)
    {
        $result = parent::listBucketIntelligentTieringConfigurations($args->toArray());
        return new ListBucketIntelligentTieringConfigurationsResponse($result->toArray());
    }
}
