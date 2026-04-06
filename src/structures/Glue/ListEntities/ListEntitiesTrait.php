<?php

namespace Sunaoka\Aws\Structures\Glue\ListEntities;

trait ListEntitiesTrait
{
    /**
     * @param ListEntitiesRequest $args
     * @return ListEntitiesResponse
     */
    public function listEntities(ListEntitiesRequest $args)
    {
        $result = parent::listEntities($args->toArray());
        return new ListEntitiesResponse($result->toArray());
    }
}
