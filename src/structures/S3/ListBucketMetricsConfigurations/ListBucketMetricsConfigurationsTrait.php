<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketMetricsConfigurations;

trait ListBucketMetricsConfigurationsTrait
{
    /**
     * @param ListBucketMetricsConfigurationsRequest $args
     * @return ListBucketMetricsConfigurationsResponse
     */
    public function listBucketMetricsConfigurations(ListBucketMetricsConfigurationsRequest $args)
    {
        $result = parent::listBucketMetricsConfigurations($args->toArray());
        return new ListBucketMetricsConfigurationsResponse($result->toArray());
    }
}
