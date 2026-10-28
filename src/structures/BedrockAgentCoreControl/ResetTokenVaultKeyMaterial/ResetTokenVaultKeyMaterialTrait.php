<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ResetTokenVaultKeyMaterial;

trait ResetTokenVaultKeyMaterialTrait
{
    /**
     * @param ResetTokenVaultKeyMaterialRequest $args
     * @return ResetTokenVaultKeyMaterialResponse
     */
    public function resetTokenVaultKeyMaterial(ResetTokenVaultKeyMaterialRequest $args)
    {
        $result = parent::resetTokenVaultKeyMaterial($args->toArray());
        return new ResetTokenVaultKeyMaterialResponse($result->toArray());
    }
}
