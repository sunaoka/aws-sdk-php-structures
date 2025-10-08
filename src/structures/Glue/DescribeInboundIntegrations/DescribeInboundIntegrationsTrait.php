<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeInboundIntegrations;

trait DescribeInboundIntegrationsTrait
{
    /**
     * @param DescribeInboundIntegrationsRequest $args
     * @return DescribeInboundIntegrationsResponse
     */
    public function describeInboundIntegrations(DescribeInboundIntegrationsRequest $args)
    {
        $result = parent::describeInboundIntegrations($args->toArray());
        return new DescribeInboundIntegrationsResponse($result->toArray());
    }
}
