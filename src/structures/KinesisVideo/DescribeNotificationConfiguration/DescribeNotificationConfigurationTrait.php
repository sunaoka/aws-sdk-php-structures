<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeNotificationConfiguration;

trait DescribeNotificationConfigurationTrait
{
    /**
     * @param DescribeNotificationConfigurationRequest $args
     * @return DescribeNotificationConfigurationResponse
     */
    public function describeNotificationConfiguration(DescribeNotificationConfigurationRequest $args)
    {
        $result = parent::describeNotificationConfiguration($args->toArray());
        return new DescribeNotificationConfigurationResponse($result->toArray());
    }
}
