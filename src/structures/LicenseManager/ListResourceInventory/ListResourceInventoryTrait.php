<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListResourceInventory;

trait ListResourceInventoryTrait
{
    /**
     * @param ListResourceInventoryRequest $args
     * @return ListResourceInventoryResponse
     */
    public function listResourceInventory(ListResourceInventoryRequest $args)
    {
        $result = parent::listResourceInventory($args->toArray());
        return new ListResourceInventoryResponse($result->toArray());
    }
}
