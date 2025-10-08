<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DescribeWorkspaceConfiguration;

trait DescribeWorkspaceConfigurationTrait
{
    /**
     * @param DescribeWorkspaceConfigurationRequest $args
     * @return DescribeWorkspaceConfigurationResponse
     */
    public function describeWorkspaceConfiguration(DescribeWorkspaceConfigurationRequest $args)
    {
        $result = parent::describeWorkspaceConfiguration($args->toArray());
        return new DescribeWorkspaceConfigurationResponse($result->toArray());
    }
}
