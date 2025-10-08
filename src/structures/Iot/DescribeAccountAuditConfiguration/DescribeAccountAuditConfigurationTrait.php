<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAccountAuditConfiguration;

trait DescribeAccountAuditConfigurationTrait
{
    /**
     * @param DescribeAccountAuditConfigurationRequest $args
     * @return DescribeAccountAuditConfigurationResponse
     */
    public function describeAccountAuditConfiguration(DescribeAccountAuditConfigurationRequest $args)
    {
        $result = parent::describeAccountAuditConfiguration($args->toArray());
        return new DescribeAccountAuditConfigurationResponse($result->toArray());
    }
}
