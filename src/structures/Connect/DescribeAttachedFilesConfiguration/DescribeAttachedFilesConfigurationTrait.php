<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeAttachedFilesConfiguration;

trait DescribeAttachedFilesConfigurationTrait
{
    /**
     * @param DescribeAttachedFilesConfigurationRequest $args
     * @return DescribeAttachedFilesConfigurationResponse
     */
    public function describeAttachedFilesConfiguration(DescribeAttachedFilesConfigurationRequest $args)
    {
        $result = parent::describeAttachedFilesConfiguration($args->toArray());
        return new DescribeAttachedFilesConfigurationResponse($result->toArray());
    }
}
