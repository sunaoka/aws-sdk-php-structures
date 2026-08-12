<?php

namespace Sunaoka\Aws\Structures\Odb\CreateExascaleDbStorageVault;

trait CreateExascaleDbStorageVaultTrait
{
    /**
     * @param CreateExascaleDbStorageVaultRequest $args
     * @return CreateExascaleDbStorageVaultResponse
     */
    public function createExascaleDbStorageVault(CreateExascaleDbStorageVaultRequest $args)
    {
        $result = parent::createExascaleDbStorageVault($args->toArray());
        return new CreateExascaleDbStorageVaultResponse($result->toArray());
    }
}
