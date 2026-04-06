<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetPortal;

trait GetPortalTrait
{
    /**
     * @param GetPortalRequest $args
     * @return GetPortalResponse
     */
    public function getPortal(GetPortalRequest $args)
    {
        $result = parent::getPortal($args->toArray());
        return new GetPortalResponse($result->toArray());
    }
}
