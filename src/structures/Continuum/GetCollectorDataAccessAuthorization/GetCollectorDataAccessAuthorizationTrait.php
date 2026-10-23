<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCollectorDataAccessAuthorization;

trait GetCollectorDataAccessAuthorizationTrait
{
    /**
     * @param GetCollectorDataAccessAuthorizationRequest $args
     * @return GetCollectorDataAccessAuthorizationResponse
     */
    public function getCollectorDataAccessAuthorization(GetCollectorDataAccessAuthorizationRequest $args)
    {
        $result = parent::getCollectorDataAccessAuthorization($args->toArray());
        return new GetCollectorDataAccessAuthorizationResponse($result->toArray());
    }
}
