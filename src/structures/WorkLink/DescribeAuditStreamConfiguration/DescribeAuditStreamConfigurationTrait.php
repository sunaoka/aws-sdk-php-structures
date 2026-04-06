<?php

namespace Sunaoka\Aws\Structures\WorkLink\DescribeAuditStreamConfiguration;

trait DescribeAuditStreamConfigurationTrait
{
    /**
     * @param DescribeAuditStreamConfigurationRequest $args
     * @return DescribeAuditStreamConfigurationResponse
     */
    public function describeAuditStreamConfiguration(DescribeAuditStreamConfigurationRequest $args)
    {
        $result = parent::describeAuditStreamConfiguration($args->toArray());
        return new DescribeAuditStreamConfigurationResponse($result->toArray());
    }
}
