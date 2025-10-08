<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\DeleteCrossAccountAuthorization;

trait DeleteCrossAccountAuthorizationTrait
{
    /**
     * @param DeleteCrossAccountAuthorizationRequest $args
     * @return DeleteCrossAccountAuthorizationResponse
     */
    public function deleteCrossAccountAuthorization(DeleteCrossAccountAuthorizationRequest $args)
    {
        $result = parent::deleteCrossAccountAuthorization($args->toArray());
        return new DeleteCrossAccountAuthorizationResponse($result->toArray());
    }
}
