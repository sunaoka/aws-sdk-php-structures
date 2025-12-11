<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ListPortalProducts;

trait ListPortalProductsTrait
{
    /**
     * @param ListPortalProductsRequest $args
     * @return ListPortalProductsResponse
     */
    public function listPortalProducts(ListPortalProductsRequest $args)
    {
        $result = parent::listPortalProducts($args->toArray());
        return new ListPortalProductsResponse($result->toArray());
    }
}
