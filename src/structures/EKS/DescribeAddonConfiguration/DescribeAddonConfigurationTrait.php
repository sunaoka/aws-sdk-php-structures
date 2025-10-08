<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddonConfiguration;

trait DescribeAddonConfigurationTrait
{
    /**
     * @param DescribeAddonConfigurationRequest $args
     * @return DescribeAddonConfigurationResponse
     */
    public function describeAddonConfiguration(DescribeAddonConfigurationRequest $args)
    {
        $result = parent::describeAddonConfiguration($args->toArray());
        return new DescribeAddonConfigurationResponse($result->toArray());
    }
}
