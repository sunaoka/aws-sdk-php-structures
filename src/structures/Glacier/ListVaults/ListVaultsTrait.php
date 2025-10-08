<?php

namespace Sunaoka\Aws\Structures\Glacier\ListVaults;

trait ListVaultsTrait
{
    /**
     * @param ListVaultsRequest $args
     * @return ListVaultsResponse
     */
    public function listVaults(ListVaultsRequest $args)
    {
        $result = parent::listVaults($args->toArray());
        return new ListVaultsResponse($result->toArray());
    }
}
