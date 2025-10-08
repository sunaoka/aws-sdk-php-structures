<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateEntity;

trait UpdateEntityTrait
{
    /**
     * @param UpdateEntityRequest $args
     * @return UpdateEntityResponse
     */
    public function updateEntity(UpdateEntityRequest $args)
    {
        $result = parent::updateEntity($args->toArray());
        return new UpdateEntityResponse($result->toArray());
    }
}
