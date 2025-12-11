<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetProductRestEndpointPage;

trait GetProductRestEndpointPageTrait
{
    /**
     * @param GetProductRestEndpointPageRequest $args
     * @return GetProductRestEndpointPageResponse
     */
    public function getProductRestEndpointPage(GetProductRestEndpointPageRequest $args)
    {
        $result = parent::getProductRestEndpointPage($args->toArray());
        return new GetProductRestEndpointPageResponse($result->toArray());
    }
}
