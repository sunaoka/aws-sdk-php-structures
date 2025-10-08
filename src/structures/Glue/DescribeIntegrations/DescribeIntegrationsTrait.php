<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeIntegrations;

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
