<?php

namespace Sunaoka\Aws\Structures\CloudFormation\BatchDescribeTypeConfigurations;

trait BatchDescribeTypeConfigurationsTrait
{
    /**
     * @param BatchDescribeTypeConfigurationsRequest $args
     * @return BatchDescribeTypeConfigurationsResponse
     */
    public function batchDescribeTypeConfigurations(BatchDescribeTypeConfigurationsRequest $args)
    {
        $result = parent::batchDescribeTypeConfigurations($args->toArray());
        return new BatchDescribeTypeConfigurationsResponse($result->toArray());
    }
}
