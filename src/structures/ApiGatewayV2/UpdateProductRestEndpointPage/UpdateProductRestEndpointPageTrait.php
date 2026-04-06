<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateProductRestEndpointPage;

trait UpdateProductRestEndpointPageTrait
{
    /**
     * @param UpdateProductRestEndpointPageRequest $args
     * @return UpdateProductRestEndpointPageResponse
     */
    public function updateProductRestEndpointPage(UpdateProductRestEndpointPageRequest $args)
    {
        $result = parent::updateProductRestEndpointPage($args->toArray());
        return new UpdateProductRestEndpointPageResponse($result->toArray());
    }
}
