<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteApplicationCloudWatchLoggingOption;

trait DeleteApplicationCloudWatchLoggingOptionTrait
{
    /**
     * @param DeleteApplicationCloudWatchLoggingOptionRequest $args
     * @return DeleteApplicationCloudWatchLoggingOptionResponse
     */
    public function deleteApplicationCloudWatchLoggingOption(DeleteApplicationCloudWatchLoggingOptionRequest $args)
    {
        $result = parent::deleteApplicationCloudWatchLoggingOption($args->toArray());
        return new DeleteApplicationCloudWatchLoggingOptionResponse($result->toArray());
    }
}
