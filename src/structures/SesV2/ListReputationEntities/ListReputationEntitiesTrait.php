<?php

namespace Sunaoka\Aws\Structures\SesV2\ListReputationEntities;

trait ListReputationEntitiesTrait
{
    /**
     * @param ListReputationEntitiesRequest $args
     * @return ListReputationEntitiesResponse
     */
    public function listReputationEntities(ListReputationEntitiesRequest $args)
    {
        $result = parent::listReputationEntities($args->toArray());
        return new ListReputationEntitiesResponse($result->toArray());
    }
}
