<?php

namespace Sunaoka\Aws\Structures\Route53\ListQueryLoggingConfigs;

trait ListQueryLoggingConfigsTrait
{
    /**
     * @param ListQueryLoggingConfigsRequest $args
     * @return ListQueryLoggingConfigsResponse
     */
    public function listQueryLoggingConfigs(ListQueryLoggingConfigsRequest $args)
    {
        $result = parent::listQueryLoggingConfigs($args->toArray());
        return new ListQueryLoggingConfigsResponse($result->toArray());
    }
}
