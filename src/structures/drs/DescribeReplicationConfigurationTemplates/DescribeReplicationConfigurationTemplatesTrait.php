<?php

namespace Sunaoka\Aws\Structures\drs\DescribeReplicationConfigurationTemplates;

trait DescribeReplicationConfigurationTemplatesTrait
{
    /**
     * @param DescribeReplicationConfigurationTemplatesRequest $args
     * @return DescribeReplicationConfigurationTemplatesResponse
     */
    public function describeReplicationConfigurationTemplates(DescribeReplicationConfigurationTemplatesRequest $args)
    {
        $result = parent::describeReplicationConfigurationTemplates($args->toArray());
        return new DescribeReplicationConfigurationTemplatesResponse($result->toArray());
    }
}
