<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2;

class KinesisAnalyticsV2Client extends \Aws\KinesisAnalyticsV2\KinesisAnalyticsV2Client
{
    use AddApplicationCloudWatchLoggingOption\AddApplicationCloudWatchLoggingOptionTrait;
    use AddApplicationInput\AddApplicationInputTrait;
    use AddApplicationInputProcessingConfiguration\AddApplicationInputProcessingConfigurationTrait;
    use AddApplicationOutput\AddApplicationOutputTrait;
    use AddApplicationReferenceDataSource\AddApplicationReferenceDataSourceTrait;
    use AddApplicationVpcConfiguration\AddApplicationVpcConfigurationTrait;
    use CreateApplication\CreateApplicationTrait;
    use CreateApplicationPresignedUrl\CreateApplicationPresignedUrlTrait;
    use CreateApplicationSnapshot\CreateApplicationSnapshotTrait;
    use DeleteApplication\DeleteApplicationTrait;
    use DeleteApplicationCloudWatchLoggingOption\DeleteApplicationCloudWatchLoggingOptionTrait;
    use DeleteApplicationInputProcessingConfiguration\DeleteApplicationInputProcessingConfigurationTrait;
    use DeleteApplicationOutput\DeleteApplicationOutputTrait;
    use DeleteApplicationReferenceDataSource\DeleteApplicationReferenceDataSourceTrait;
    use DeleteApplicationSnapshot\DeleteApplicationSnapshotTrait;
    use DeleteApplicationVpcConfiguration\DeleteApplicationVpcConfigurationTrait;
    use DescribeApplication\DescribeApplicationTrait;
    use DescribeApplicationOperation\DescribeApplicationOperationTrait;
    use DescribeApplicationSnapshot\DescribeApplicationSnapshotTrait;
    use DescribeApplicationVersion\DescribeApplicationVersionTrait;
    use DiscoverInputSchema\DiscoverInputSchemaTrait;
    use ListApplicationOperations\ListApplicationOperationsTrait;
    use ListApplicationSnapshots\ListApplicationSnapshotsTrait;
    use ListApplicationVersions\ListApplicationVersionsTrait;
    use ListApplications\ListApplicationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RollbackApplication\RollbackApplicationTrait;
    use StartApplication\StartApplicationTrait;
    use StopApplication\StopApplicationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApplication\UpdateApplicationTrait;
    use UpdateApplicationMaintenanceConfiguration\UpdateApplicationMaintenanceConfigurationTrait;
}
