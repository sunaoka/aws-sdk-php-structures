<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateInstance;

trait CreateInstanceTrait
{
    /**
     * @param CreateInstanceRequest $args
     * @return CreateInstanceResponse
     */
    public function createInstance(CreateInstanceRequest $args)
    {
        $result = parent::createInstance($args->toArray());
        return new CreateInstanceResponse($result->toArray());
    }
}
