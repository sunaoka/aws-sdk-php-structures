<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteTapePool;

trait DeleteTapePoolTrait
{
    /**
     * @param DeleteTapePoolRequest $args
     * @return DeleteTapePoolResponse
     */
    public function deleteTapePool(DeleteTapePoolRequest $args)
    {
        $result = parent::deleteTapePool($args->toArray());
        return new DeleteTapePoolResponse($result->toArray());
    }
}
