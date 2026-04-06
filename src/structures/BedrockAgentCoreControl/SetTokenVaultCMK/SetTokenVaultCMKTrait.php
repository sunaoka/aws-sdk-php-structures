<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SetTokenVaultCMK;

trait SetTokenVaultCMKTrait
{
    /**
     * @param SetTokenVaultCMKRequest $args
     * @return SetTokenVaultCMKResponse
     */
    public function setTokenVaultCMK(SetTokenVaultCMKRequest $args)
    {
        $result = parent::setTokenVaultCMK($args->toArray());
        return new SetTokenVaultCMKResponse($result->toArray());
    }
}
