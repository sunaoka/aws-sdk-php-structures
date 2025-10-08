<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\DeleteEntity;

trait DeleteEntityTrait
{
    /**
     * @param DeleteEntityRequest $args
     * @return DeleteEntityResponse
     */
    public function deleteEntity(DeleteEntityRequest $args)
    {
        $result = parent::deleteEntity($args->toArray());
        return new DeleteEntityResponse($result->toArray());
    }
}
