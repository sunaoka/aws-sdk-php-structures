<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreatePortalProduct;

trait CreatePortalProductTrait
{
    /**
     * @param CreatePortalProductRequest $args
     * @return CreatePortalProductResponse
     */
    public function createPortalProduct(CreatePortalProductRequest $args)
    {
        $result = parent::createPortalProduct($args->toArray());
        return new CreatePortalProductResponse($result->toArray());
    }
}
