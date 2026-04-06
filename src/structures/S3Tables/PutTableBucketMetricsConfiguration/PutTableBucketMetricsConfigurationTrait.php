<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketMetricsConfiguration;

trait PutTableBucketMetricsConfigurationTrait
{
    /**
     * @param PutTableBucketMetricsConfigurationRequest $args
     * @return void
     */
    public function putTableBucketMetricsConfiguration(PutTableBucketMetricsConfigurationRequest $args)
    {
        parent::putTableBucketMetricsConfiguration($args->toArray());
    }
}
