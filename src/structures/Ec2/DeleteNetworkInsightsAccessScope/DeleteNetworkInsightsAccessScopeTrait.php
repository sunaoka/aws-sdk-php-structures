<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkInsightsAccessScope;

trait DeleteNetworkInsightsAccessScopeTrait
{
    /**
     * @param DeleteNetworkInsightsAccessScopeRequest $args
     * @return DeleteNetworkInsightsAccessScopeResponse
     */
    public function deleteNetworkInsightsAccessScope(DeleteNetworkInsightsAccessScopeRequest $args)
    {
        $result = parent::deleteNetworkInsightsAccessScope($args->toArray());
        return new DeleteNetworkInsightsAccessScopeResponse($result->toArray());
    }
}
