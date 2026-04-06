<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListIdentityPropagationConfigs;

trait ListIdentityPropagationConfigsTrait
{
    /**
     * @param ListIdentityPropagationConfigsRequest $args
     * @return ListIdentityPropagationConfigsResponse
     */
    public function listIdentityPropagationConfigs(ListIdentityPropagationConfigsRequest $args)
    {
        $result = parent::listIdentityPropagationConfigs($args->toArray());
        return new ListIdentityPropagationConfigsResponse($result->toArray());
    }
}
