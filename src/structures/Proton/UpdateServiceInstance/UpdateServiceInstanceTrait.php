<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateServiceInstance;

trait UpdateServiceInstanceTrait
{
    /**
     * @param UpdateServiceInstanceRequest $args
     * @return UpdateServiceInstanceResponse
     */
    public function updateServiceInstance(UpdateServiceInstanceRequest $args)
    {
        $result = parent::updateServiceInstance($args->toArray());
        return new UpdateServiceInstanceResponse($result->toArray());
    }
}
