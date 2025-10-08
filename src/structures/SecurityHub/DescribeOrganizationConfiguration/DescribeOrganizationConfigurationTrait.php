<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeOrganizationConfiguration;

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
