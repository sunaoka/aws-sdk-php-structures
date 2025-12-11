<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteProductPage;

trait DeleteProductPageTrait
{
    /**
     * @param DeleteProductPageRequest $args
     * @return void
     */
    public function deleteProductPage(DeleteProductPageRequest $args)
    {
        parent::deleteProductPage($args->toArray());
    }
}
