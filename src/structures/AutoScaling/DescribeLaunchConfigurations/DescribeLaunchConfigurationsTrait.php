<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLaunchConfigurations;

trait DescribeLaunchConfigurationsTrait
{
    /**
     * @param DescribeLaunchConfigurationsRequest $args
     * @return DescribeLaunchConfigurationsResponse
     */
    public function describeLaunchConfigurations(DescribeLaunchConfigurationsRequest $args)
    {
        $result = parent::describeLaunchConfigurations($args->toArray());
        return new DescribeLaunchConfigurationsResponse($result->toArray());
    }
}
