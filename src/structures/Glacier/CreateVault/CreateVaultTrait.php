<?php

namespace Sunaoka\Aws\Structures\Glacier\CreateVault;

trait CreateVaultTrait
{
    /**
     * @param CreateVaultRequest $args
     * @return CreateVaultResponse
     */
    public function createVault(CreateVaultRequest $args)
    {
        $result = parent::createVault($args->toArray());
        return new CreateVaultResponse($result->toArray());
    }
}
