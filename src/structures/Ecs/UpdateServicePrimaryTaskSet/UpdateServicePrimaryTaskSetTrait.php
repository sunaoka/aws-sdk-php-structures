<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateServicePrimaryTaskSet;

trait UpdateServicePrimaryTaskSetTrait
{
    /**
     * @param UpdateServicePrimaryTaskSetRequest $args
     * @return UpdateServicePrimaryTaskSetResponse
     */
    public function updateServicePrimaryTaskSet(UpdateServicePrimaryTaskSetRequest $args)
    {
        $result = parent::updateServicePrimaryTaskSet($args->toArray());
        return new UpdateServicePrimaryTaskSetResponse($result->toArray());
    }
}
