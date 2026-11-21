<?php

namespace Sunaoka\Aws\Structures\APIPortal\DeleteProduct;

trait DeleteProductTrait
{
    /**
     * @param DeleteProductRequest $args
     * @return void
     */
    public function deleteProduct(DeleteProductRequest $args)
    {
        parent::deleteProduct($args->toArray());
    }
}
