<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationCloudWatchLoggingOption;

trait AddApplicationCloudWatchLoggingOptionTrait
{
    /**
     * @param AddApplicationCloudWatchLoggingOptionRequest $args
     * @return AddApplicationCloudWatchLoggingOptionResponse
     */
    public function addApplicationCloudWatchLoggingOption(AddApplicationCloudWatchLoggingOptionRequest $args)
    {
        $result = parent::addApplicationCloudWatchLoggingOption($args->toArray());
        return new AddApplicationCloudWatchLoggingOptionResponse($result->toArray());
    }
}
