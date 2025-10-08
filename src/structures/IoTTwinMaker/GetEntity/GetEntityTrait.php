<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetEntity;

trait GetEntityTrait
{
    /**
     * @param GetEntityRequest $args
     * @return GetEntityResponse
     */
    public function getEntity(GetEntityRequest $args)
    {
        $result = parent::getEntity($args->toArray());
        return new GetEntityResponse($result->toArray());
    }
}
