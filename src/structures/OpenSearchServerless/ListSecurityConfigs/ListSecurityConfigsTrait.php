<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListSecurityConfigs;

trait ListSecurityConfigsTrait
{
    /**
     * @param ListSecurityConfigsRequest $args
     * @return ListSecurityConfigsResponse
     */
    public function listSecurityConfigs(ListSecurityConfigsRequest $args)
    {
        $result = parent::listSecurityConfigs($args->toArray());
        return new ListSecurityConfigsResponse($result->toArray());
    }
}
