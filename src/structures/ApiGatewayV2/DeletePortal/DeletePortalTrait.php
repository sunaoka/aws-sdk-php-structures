<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeletePortal;

trait DeletePortalTrait
{
    /**
     * @param DeletePortalRequest $args
     * @return void
     */
    public function deletePortal(DeletePortalRequest $args)
    {
        parent::deletePortal($args->toArray());
    }
}
