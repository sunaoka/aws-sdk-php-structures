<?php

namespace Sunaoka\Aws\Structures\Glacier\DeleteVault;

trait DeleteVaultTrait
{
    /**
     * @param DeleteVaultRequest $args
     * @return void
     */
    public function deleteVault(DeleteVaultRequest $args)
    {
        parent::deleteVault($args->toArray());
    }
}
