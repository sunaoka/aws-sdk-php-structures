<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateInstance;

trait UpdateInstanceTrait
{
    /**
     * @param UpdateInstanceRequest $args
     * @return UpdateInstanceResponse
     */
    public function updateInstance(UpdateInstanceRequest $args)
    {
        $result = parent::updateInstance($args->toArray());
        return new UpdateInstanceResponse($result->toArray());
    }
}
