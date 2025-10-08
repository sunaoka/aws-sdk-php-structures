<?php

namespace Sunaoka\Aws\Structures\Lambda\ListCodeSigningConfigs;

trait ListCodeSigningConfigsTrait
{
    /**
     * @param ListCodeSigningConfigsRequest $args
     * @return ListCodeSigningConfigsResponse
     */
    public function listCodeSigningConfigs(ListCodeSigningConfigsRequest $args)
    {
        $result = parent::listCodeSigningConfigs($args->toArray());
        return new ListCodeSigningConfigsResponse($result->toArray());
    }
}
