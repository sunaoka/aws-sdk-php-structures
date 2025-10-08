<?php

namespace Sunaoka\Aws\Structures\Ssm\GetInventory;

trait GetInventoryTrait
{
    /**
     * @param GetInventoryRequest $args
     * @return GetInventoryResponse
     */
    public function getInventory(GetInventoryRequest $args)
    {
        $result = parent::getInventory($args->toArray());
        return new GetInventoryResponse($result->toArray());
    }
}
