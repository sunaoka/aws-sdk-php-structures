<?php

namespace Sunaoka\Aws\Structures\AppFabric\DeleteAppAuthorization;

trait DeleteAppAuthorizationTrait
{
    /**
     * @param DeleteAppAuthorizationRequest $args
     * @return DeleteAppAuthorizationResponse
     */
    public function deleteAppAuthorization(DeleteAppAuthorizationRequest $args)
    {
        $result = parent::deleteAppAuthorization($args->toArray());
        return new DeleteAppAuthorizationResponse($result->toArray());
    }
}
