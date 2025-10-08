<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\ListCrossAccountAuthorizations;

trait ListCrossAccountAuthorizationsTrait
{
    /**
     * @param ListCrossAccountAuthorizationsRequest $args
     * @return ListCrossAccountAuthorizationsResponse
     */
    public function listCrossAccountAuthorizations(ListCrossAccountAuthorizationsRequest $args)
    {
        $result = parent::listCrossAccountAuthorizations($args->toArray());
        return new ListCrossAccountAuthorizationsResponse($result->toArray());
    }
}
