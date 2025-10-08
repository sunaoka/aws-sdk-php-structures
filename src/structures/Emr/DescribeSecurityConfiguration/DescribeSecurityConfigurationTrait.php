<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeSecurityConfiguration;

trait DescribeSecurityConfigurationTrait
{
    /**
     * @param DescribeSecurityConfigurationRequest $args
     * @return DescribeSecurityConfigurationResponse
     */
    public function describeSecurityConfiguration(DescribeSecurityConfigurationRequest $args)
    {
        $result = parent::describeSecurityConfiguration($args->toArray());
        return new DescribeSecurityConfigurationResponse($result->toArray());
    }
}
