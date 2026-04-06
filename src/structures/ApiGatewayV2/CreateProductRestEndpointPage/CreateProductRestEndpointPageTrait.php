<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateProductRestEndpointPage;

trait CreateProductRestEndpointPageTrait
{
    /**
     * @param CreateProductRestEndpointPageRequest $args
     * @return CreateProductRestEndpointPageResponse
     */
    public function createProductRestEndpointPage(CreateProductRestEndpointPageRequest $args)
    {
        $result = parent::createProductRestEndpointPage($args->toArray());
        return new CreateProductRestEndpointPageResponse($result->toArray());
    }
}
