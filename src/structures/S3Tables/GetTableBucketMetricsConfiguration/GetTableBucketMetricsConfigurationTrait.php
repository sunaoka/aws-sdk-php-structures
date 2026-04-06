<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucketMetricsConfiguration;

trait GetTableBucketMetricsConfigurationTrait
{
    /**
     * @param GetTableBucketMetricsConfigurationRequest $args
     * @return GetTableBucketMetricsConfigurationResponse
     */
    public function getTableBucketMetricsConfiguration(GetTableBucketMetricsConfigurationRequest $args)
    {
        $result = parent::getTableBucketMetricsConfiguration($args->toArray());
        return new GetTableBucketMetricsConfigurationResponse($result->toArray());
    }
}
