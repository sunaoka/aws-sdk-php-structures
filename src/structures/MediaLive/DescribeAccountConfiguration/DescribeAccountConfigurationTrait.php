<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeAccountConfiguration;

trait DescribeAccountConfigurationTrait
{
    /**
     * @param DescribeAccountConfigurationRequest $args
     * @return DescribeAccountConfigurationResponse
     */
    public function describeAccountConfiguration(DescribeAccountConfigurationRequest $args)
    {
        $result = parent::describeAccountConfiguration($args->toArray());
        return new DescribeAccountConfigurationResponse($result->toArray());
    }
}
