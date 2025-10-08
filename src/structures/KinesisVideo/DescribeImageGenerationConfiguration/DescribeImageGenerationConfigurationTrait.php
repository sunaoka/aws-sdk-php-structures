<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeImageGenerationConfiguration;

trait DescribeImageGenerationConfigurationTrait
{
    /**
     * @param DescribeImageGenerationConfigurationRequest $args
     * @return DescribeImageGenerationConfigurationResponse
     */
    public function describeImageGenerationConfiguration(DescribeImageGenerationConfigurationRequest $args)
    {
        $result = parent::describeImageGenerationConfiguration($args->toArray());
        return new DescribeImageGenerationConfigurationResponse($result->toArray());
    }
}
