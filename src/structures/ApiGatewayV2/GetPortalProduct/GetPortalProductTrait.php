<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetPortalProduct;

trait GetPortalProductTrait
{
    /**
     * @param GetPortalProductRequest $args
     * @return GetPortalProductResponse
     */
    public function getPortalProduct(GetPortalProductRequest $args)
    {
        $result = parent::getPortalProduct($args->toArray());
        return new GetPortalProductResponse($result->toArray());
    }
}
