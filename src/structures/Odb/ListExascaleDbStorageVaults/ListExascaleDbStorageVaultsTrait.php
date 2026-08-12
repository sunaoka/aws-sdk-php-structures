<?php

namespace Sunaoka\Aws\Structures\Odb\ListExascaleDbStorageVaults;

trait ListExascaleDbStorageVaultsTrait
{
    /**
     * @param ListExascaleDbStorageVaultsRequest $args
     * @return ListExascaleDbStorageVaultsResponse
     */
    public function listExascaleDbStorageVaults(ListExascaleDbStorageVaultsRequest $args)
    {
        $result = parent::listExascaleDbStorageVaults($args->toArray());
        return new ListExascaleDbStorageVaultsResponse($result->toArray());
    }
}
