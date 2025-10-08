<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketAnalyticsConfigurations;

trait ListBucketAnalyticsConfigurationsTrait
{
    /**
     * @param ListBucketAnalyticsConfigurationsRequest $args
     * @return ListBucketAnalyticsConfigurationsResponse
     */
    public function listBucketAnalyticsConfigurations(ListBucketAnalyticsConfigurationsRequest $args)
    {
        $result = parent::listBucketAnalyticsConfigurations($args->toArray());
        return new ListBucketAnalyticsConfigurationsResponse($result->toArray());
    }
}
