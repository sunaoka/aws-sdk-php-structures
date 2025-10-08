<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeHsmConfigurations;

trait DescribeHsmConfigurationsTrait
{
    /**
     * @param DescribeHsmConfigurationsRequest $args
     * @return DescribeHsmConfigurationsResponse
     */
    public function describeHsmConfigurations(DescribeHsmConfigurationsRequest $args)
    {
        $result = parent::describeHsmConfigurations($args->toArray());
        return new DescribeHsmConfigurationsResponse($result->toArray());
    }
}
