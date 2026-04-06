<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateAppInstance;

trait UpdateAppInstanceTrait
{
    /**
     * @param UpdateAppInstanceRequest $args
     * @return UpdateAppInstanceResponse
     */
    public function updateAppInstance(UpdateAppInstanceRequest $args)
    {
        $result = parent::updateAppInstance($args->toArray());
        return new UpdateAppInstanceResponse($result->toArray());
    }
}
