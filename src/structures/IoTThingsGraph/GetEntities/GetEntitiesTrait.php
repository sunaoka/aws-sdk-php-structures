<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetEntities;

trait GetEntitiesTrait
{
    /**
     * @param GetEntitiesRequest $args
     * @return GetEntitiesResponse
     */
    public function getEntities(GetEntitiesRequest $args)
    {
        $result = parent::getEntities($args->toArray());
        return new GetEntitiesResponse($result->toArray());
    }
}
