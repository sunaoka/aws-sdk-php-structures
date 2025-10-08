<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeConfigurations;

trait DescribeConfigurationsTrait
{
    /**
     * @param DescribeConfigurationsRequest $args
     * @return DescribeConfigurationsResponse
     */
    public function describeConfigurations(DescribeConfigurationsRequest $args)
    {
        $result = parent::describeConfigurations($args->toArray());
        return new DescribeConfigurationsResponse($result->toArray());
    }
}
