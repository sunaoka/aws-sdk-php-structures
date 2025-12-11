<?php

namespace Sunaoka\Aws\Structures\S3Tables\DeleteTableBucketMetricsConfiguration;

trait DeleteTableBucketMetricsConfigurationTrait
{
    /**
     * @param DeleteTableBucketMetricsConfigurationRequest $args
     * @return void
     */
    public function deleteTableBucketMetricsConfiguration(DeleteTableBucketMetricsConfigurationRequest $args)
    {
        parent::deleteTableBucketMetricsConfiguration($args->toArray());
    }
}
