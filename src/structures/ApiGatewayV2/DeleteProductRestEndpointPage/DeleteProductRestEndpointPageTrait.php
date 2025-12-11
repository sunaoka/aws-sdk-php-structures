<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteProductRestEndpointPage;

trait DeleteProductRestEndpointPageTrait
{
    /**
     * @param DeleteProductRestEndpointPageRequest $args
     * @return void
     */
    public function deleteProductRestEndpointPage(DeleteProductRestEndpointPageRequest $args)
    {
        parent::deleteProductRestEndpointPage($args->toArray());
    }
}
