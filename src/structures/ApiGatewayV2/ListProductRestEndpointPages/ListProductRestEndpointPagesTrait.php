<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ListProductRestEndpointPages;

trait ListProductRestEndpointPagesTrait
{
    /**
     * @param ListProductRestEndpointPagesRequest $args
     * @return ListProductRestEndpointPagesResponse
     */
    public function listProductRestEndpointPages(ListProductRestEndpointPagesRequest $args)
    {
        $result = parent::listProductRestEndpointPages($args->toArray());
        return new ListProductRestEndpointPagesResponse($result->toArray());
    }
}
