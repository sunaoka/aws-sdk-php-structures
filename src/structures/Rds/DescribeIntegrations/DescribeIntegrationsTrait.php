<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeIntegrations;

trait DescribeIntegrationsTrait
{
    /**
     * @param DescribeIntegrationsRequest $args
     * @return DescribeIntegrationsResponse
     */
    public function describeIntegrations(DescribeIntegrationsRequest $args)
    {
        $result = parent::describeIntegrations($args->toArray());
        return new DescribeIntegrationsResponse($result->toArray());
    }
}
