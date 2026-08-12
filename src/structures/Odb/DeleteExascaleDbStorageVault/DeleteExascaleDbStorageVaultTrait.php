<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteExascaleDbStorageVault;

trait DeleteExascaleDbStorageVaultTrait
{
    /**
     * @param DeleteExascaleDbStorageVaultRequest $args
     * @return DeleteExascaleDbStorageVaultResponse
     */
    public function deleteExascaleDbStorageVault(DeleteExascaleDbStorageVaultRequest $args)
    {
        $result = parent::deleteExascaleDbStorageVault($args->toArray());
        return new DeleteExascaleDbStorageVaultResponse($result->toArray());
    }
}
