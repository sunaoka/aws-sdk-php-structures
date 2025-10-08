<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ResendOperationAuthorization;

trait ResendOperationAuthorizationTrait
{
    /**
     * @param ResendOperationAuthorizationRequest $args
     * @return void
     */
    public function resendOperationAuthorization(ResendOperationAuthorizationRequest $args)
    {
        parent::resendOperationAuthorization($args->toArray());
    }
}
