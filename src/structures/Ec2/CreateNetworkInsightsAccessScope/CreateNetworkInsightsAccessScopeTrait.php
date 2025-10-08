<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsAccessScope;

trait CreateNetworkInsightsAccessScopeTrait
{
    /**
     * @param CreateNetworkInsightsAccessScopeRequest $args
     * @return CreateNetworkInsightsAccessScopeResponse
     */
    public function createNetworkInsightsAccessScope(CreateNetworkInsightsAccessScopeRequest $args)
    {
        $result = parent::createNetworkInsightsAccessScope($args->toArray());
        return new CreateNetworkInsightsAccessScopeResponse($result->toArray());
    }
}
