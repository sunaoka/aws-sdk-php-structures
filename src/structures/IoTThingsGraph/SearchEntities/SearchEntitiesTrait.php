<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchEntities;

trait SearchEntitiesTrait
{
    /**
     * @param SearchEntitiesRequest $args
     * @return SearchEntitiesResponse
     */
    public function searchEntities(SearchEntitiesRequest $args)
    {
        $result = parent::searchEntities($args->toArray());
        return new SearchEntitiesResponse($result->toArray());
    }
}
