<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\PublishPortal;

trait PublishPortalTrait
{
    /**
     * @param PublishPortalRequest $args
     * @return PublishPortalResponse
     */
    public function publishPortal(PublishPortalRequest $args)
    {
        $result = parent::publishPortal($args->toArray());
        return new PublishPortalResponse($result->toArray());
    }
}
