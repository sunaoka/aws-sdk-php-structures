<?php

namespace Sunaoka\Aws\Structures\StorageGateway\AssignTapePool;

trait AssignTapePoolTrait
{
    /**
     * @param AssignTapePoolRequest $args
     * @return AssignTapePoolResponse
     */
    public function assignTapePool(AssignTapePoolRequest $args)
    {
        $result = parent::assignTapePool($args->toArray());
        return new AssignTapePoolResponse($result->toArray());
    }
}
