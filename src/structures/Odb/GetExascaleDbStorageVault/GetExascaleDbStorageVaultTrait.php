<?php

namespace Sunaoka\Aws\Structures\Odb\GetExascaleDbStorageVault;

trait GetExascaleDbStorageVaultTrait
{
    /**
     * @param GetExascaleDbStorageVaultRequest $args
     * @return GetExascaleDbStorageVaultResponse
     */
    public function getExascaleDbStorageVault(GetExascaleDbStorageVaultRequest $args)
    {
        $result = parent::getExascaleDbStorageVault($args->toArray());
        return new GetExascaleDbStorageVaultResponse($result->toArray());
    }
}
