<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdatePortalProduct;

trait UpdatePortalProductTrait
{
    /**
     * @param UpdatePortalProductRequest $args
     * @return UpdatePortalProductResponse
     */
    public function updatePortalProduct(UpdatePortalProductRequest $args)
    {
        $result = parent::updatePortalProduct($args->toArray());
        return new UpdatePortalProductResponse($result->toArray());
    }
}
