<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DisablePortal;

trait DisablePortalTrait
{
    /**
     * @param DisablePortalRequest $args
     * @return void
     */
    public function disablePortal(DisablePortalRequest $args)
    {
        parent::disablePortal($args->toArray());
    }
}
