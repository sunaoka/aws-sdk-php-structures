<?php

namespace Sunaoka\Aws\Structures\Detective\DescribeOrganizationConfiguration;

trait DescribeOrganizationConfigurationTrait
{
    /**
     * @param DescribeOrganizationConfigurationRequest $args
     * @return DescribeOrganizationConfigurationResponse
     */
    public function describeOrganizationConfiguration(DescribeOrganizationConfigurationRequest $args)
    {
        $result = parent::describeOrganizationConfiguration($args->toArray());
        return new DescribeOrganizationConfigurationResponse($result->toArray());
    }
}
