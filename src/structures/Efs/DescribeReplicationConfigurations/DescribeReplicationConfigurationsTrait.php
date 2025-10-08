<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeReplicationConfigurations;

trait DescribeReplicationConfigurationsTrait
{
    /**
     * @param DescribeReplicationConfigurationsRequest $args
     * @return DescribeReplicationConfigurationsResponse
     */
    public function describeReplicationConfigurations(DescribeReplicationConfigurationsRequest $args)
    {
        $result = parent::describeReplicationConfigurations($args->toArray());
        return new DescribeReplicationConfigurationsResponse($result->toArray());
    }
}
