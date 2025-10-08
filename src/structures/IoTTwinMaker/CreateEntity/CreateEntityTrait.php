<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateEntity;

trait CreateEntityTrait
{
    /**
     * @param CreateEntityRequest $args
     * @return CreateEntityResponse
     */
    public function createEntity(CreateEntityRequest $args)
    {
        $result = parent::createEntity($args->toArray());
        return new CreateEntityResponse($result->toArray());
    }
}
