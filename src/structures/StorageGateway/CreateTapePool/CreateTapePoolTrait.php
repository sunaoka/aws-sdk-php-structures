<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateTapePool;

trait CreateTapePoolTrait
{
    /**
     * @param CreateTapePoolRequest $args
     * @return CreateTapePoolResponse
     */
    public function createTapePool(CreateTapePoolRequest $args)
    {
        $result = parent::createTapePool($args->toArray());
        return new CreateTapePoolResponse($result->toArray());
    }
}
