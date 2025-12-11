<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreatePortal;

trait CreatePortalTrait
{
    /**
     * @param CreatePortalRequest $args
     * @return CreatePortalResponse
     */
    public function createPortal(CreatePortalRequest $args)
    {
        $result = parent::createPortal($args->toArray());
        return new CreatePortalResponse($result->toArray());
    }
}
