<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeNotificationConfigurations;

trait DescribeNotificationConfigurationsTrait
{
    /**
     * @param DescribeNotificationConfigurationsRequest $args
     * @return DescribeNotificationConfigurationsResponse
     */
    public function describeNotificationConfigurations(DescribeNotificationConfigurationsRequest $args)
    {
        $result = parent::describeNotificationConfigurations($args->toArray());
        return new DescribeNotificationConfigurationsResponse($result->toArray());
    }
}
