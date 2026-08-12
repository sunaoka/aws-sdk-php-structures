<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateExascaleDbStorageVault;

trait UpdateExascaleDbStorageVaultTrait
{
    /**
     * @param UpdateExascaleDbStorageVaultRequest $args
     * @return UpdateExascaleDbStorageVaultResponse
     */
    public function updateExascaleDbStorageVault(UpdateExascaleDbStorageVaultRequest $args)
    {
        $result = parent::updateExascaleDbStorageVault($args->toArray());
        return new UpdateExascaleDbStorageVaultResponse($result->toArray());
    }
}
