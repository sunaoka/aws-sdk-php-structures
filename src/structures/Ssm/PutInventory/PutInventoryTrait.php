<?php

namespace Sunaoka\Aws\Structures\Ssm\PutInventory;

trait PutInventoryTrait
{
    /**
     * @param PutInventoryRequest $args
     * @return PutInventoryResponse
     */
    public function putInventory(PutInventoryRequest $args)
    {
        $result = parent::putInventory($args->toArray());
        return new PutInventoryResponse($result->toArray());
    }
}
