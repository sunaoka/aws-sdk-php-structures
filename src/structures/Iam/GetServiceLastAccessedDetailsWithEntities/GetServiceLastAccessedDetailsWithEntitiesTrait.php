<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLastAccessedDetailsWithEntities;

trait GetServiceLastAccessedDetailsWithEntitiesTrait
{
    /**
     * @param GetServiceLastAccessedDetailsWithEntitiesRequest $args
     * @return GetServiceLastAccessedDetailsWithEntitiesResponse
     */
    public function getServiceLastAccessedDetailsWithEntities(GetServiceLastAccessedDetailsWithEntitiesRequest $args)
    {
        $result = parent::getServiceLastAccessedDetailsWithEntities($args->toArray());
        return new GetServiceLastAccessedDetailsWithEntitiesResponse($result->toArray());
    }
}
