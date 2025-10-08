<?php

namespace Sunaoka\Aws\Structures\Appflow\ListConnectorEntities;

trait ListConnectorEntitiesTrait
{
    /**
     * @param ListConnectorEntitiesRequest $args
     * @return ListConnectorEntitiesResponse
     */
    public function listConnectorEntities(ListConnectorEntitiesRequest $args)
    {
        $result = parent::listConnectorEntities($args->toArray());
        return new ListConnectorEntitiesResponse($result->toArray());
    }
}
