<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSharedVpcConfiguration;

trait DescribeSharedVpcConfigurationTrait
{
    /**
     * @param DescribeSharedVpcConfigurationRequest $args
     * @return DescribeSharedVpcConfigurationResponse
     */
    public function describeSharedVpcConfiguration(DescribeSharedVpcConfigurationRequest $args)
    {
        $result = parent::describeSharedVpcConfiguration($args->toArray());
        return new DescribeSharedVpcConfigurationResponse($result->toArray());
    }
}
