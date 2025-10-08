<?php

namespace Sunaoka\Aws\Structures\SsmSap\StartConfigurationChecks;

trait StartConfigurationChecksTrait
{
    /**
     * @param StartConfigurationChecksRequest $args
     * @return StartConfigurationChecksResponse
     */
    public function startConfigurationChecks(StartConfigurationChecksRequest $args)
    {
        $result = parent::startConfigurationChecks($args->toArray());
        return new StartConfigurationChecksResponse($result->toArray());
    }
}
