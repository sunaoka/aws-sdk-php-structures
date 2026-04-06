<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ListPortals;

trait ListPortalsTrait
{
    /**
     * @param ListPortalsRequest $args
     * @return ListPortalsResponse
     */
    public function listPortals(ListPortalsRequest $args)
    {
        $result = parent::listPortals($args->toArray());
        return new ListPortalsResponse($result->toArray());
    }
}
