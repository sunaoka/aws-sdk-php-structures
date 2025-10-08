<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkInsightsAccessScopeContent;

trait GetNetworkInsightsAccessScopeContentTrait
{
    /**
     * @param GetNetworkInsightsAccessScopeContentRequest $args
     * @return GetNetworkInsightsAccessScopeContentResponse
     */
    public function getNetworkInsightsAccessScopeContent(GetNetworkInsightsAccessScopeContentRequest $args)
    {
        $result = parent::getNetworkInsightsAccessScopeContent($args->toArray());
        return new GetNetworkInsightsAccessScopeContentResponse($result->toArray());
    }
}
