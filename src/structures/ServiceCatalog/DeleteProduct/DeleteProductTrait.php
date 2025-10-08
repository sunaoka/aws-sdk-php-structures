<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeleteProduct;

trait DeleteProductTrait
{
    /**
     * @param DeleteProductRequest $args
     * @return DeleteProductResponse
     */
    public function deleteProduct(DeleteProductRequest $args)
    {
        $result = parent::deleteProduct($args->toArray());
        return new DeleteProductResponse($result->toArray());
    }
}
