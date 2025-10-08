<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics;

class KinesisAnalyticsClient extends \Aws\KinesisAnalytics\KinesisAnalyticsClient
{
    use AddApplicationCloudWatchLoggingOption\AddApplicationCloudWatchLoggingOptionTrait;
    use AddApplicationInput\AddApplicationInputTrait;
    use AddApplicationInputProcessingConfiguration\AddApplicationInputProcessingConfigurationTrait;
    use AddApplicationOutput\AddApplicationOutputTrait;
    use AddApplicationReferenceDataSource\AddApplicationReferenceDataSourceTrait;
    use CreateApplication\CreateApplicationTrait;
    use DeleteApplication\DeleteApplicationTrait;
    use DeleteApplicationCloudWatchLoggingOption\DeleteApplicationCloudWatchLoggingOptionTrait;
    use DeleteApplicationInputProcessingConfiguration\DeleteApplicationInputProcessingConfigurationTrait;
    use DeleteApplicationOutput\DeleteApplicationOutputTrait;
    use DeleteApplicationReferenceDataSource\DeleteApplicationReferenceDataSourceTrait;
    use DescribeApplication\DescribeApplicationTrait;
    use DiscoverInputSchema\DiscoverInputSchemaTrait;
    use ListApplications\ListApplicationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartApplication\StartApplicationTrait;
    use StopApplication\StopApplicationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApplication\UpdateApplicationTrait;
}
