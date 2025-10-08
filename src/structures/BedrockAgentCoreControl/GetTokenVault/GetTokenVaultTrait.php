<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetTokenVault;

trait GetTokenVaultTrait
{
    /**
     * @param GetTokenVaultRequest $args
     * @return GetTokenVaultResponse
     */
    public function getTokenVault(GetTokenVaultRequest $args)
    {
        $result = parent::getTokenVault($args->toArray());
        return new GetTokenVaultResponse($result->toArray());
    }
}
