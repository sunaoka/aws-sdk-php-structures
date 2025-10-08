<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeEventConfigurations;

trait DescribeEventConfigurationsTrait
{
    /**
     * @param DescribeEventConfigurationsRequest $args
     * @return DescribeEventConfigurationsResponse
     */
    public function describeEventConfigurations(DescribeEventConfigurationsRequest $args)
    {
        $result = parent::describeEventConfigurations($args->toArray());
        return new DescribeEventConfigurationsResponse($result->toArray());
    }
}
