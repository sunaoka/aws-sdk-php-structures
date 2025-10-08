<?php

namespace Sunaoka\Aws\Structures\SupplyChain\DeleteInstance;

trait DeleteInstanceTrait
{
    /**
     * @param DeleteInstanceRequest $args
     * @return DeleteInstanceResponse
     */
    public function deleteInstance(DeleteInstanceRequest $args)
    {
        $result = parent::deleteInstance($args->toArray());
        return new DeleteInstanceResponse($result->toArray());
    }
}
