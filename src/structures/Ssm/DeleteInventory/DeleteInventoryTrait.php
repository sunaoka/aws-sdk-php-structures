<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteInventory;

trait DeleteInventoryTrait
{
    /**
     * @param DeleteInventoryRequest $args
     * @return DeleteInventoryResponse
     */
    public function deleteInventory(DeleteInventoryRequest $args)
    {
        $result = parent::deleteInventory($args->toArray());
        return new DeleteInventoryResponse($result->toArray());
    }
}
