<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeWorkerConfiguration;

trait DescribeWorkerConfigurationTrait
{
    /**
     * @param DescribeWorkerConfigurationRequest $args
     * @return DescribeWorkerConfigurationResponse
     */
    public function describeWorkerConfiguration(DescribeWorkerConfigurationRequest $args)
    {
        $result = parent::describeWorkerConfiguration($args->toArray());
        return new DescribeWorkerConfigurationResponse($result->toArray());
    }
}
