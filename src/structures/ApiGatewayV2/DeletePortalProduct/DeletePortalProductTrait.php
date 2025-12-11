<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeletePortalProduct;

trait DeletePortalProductTrait
{
    /**
     * @param DeletePortalProductRequest $args
     * @return void
     */
    public function deletePortalProduct(DeletePortalProductRequest $args)
    {
        parent::deletePortalProduct($args->toArray());
    }
}
