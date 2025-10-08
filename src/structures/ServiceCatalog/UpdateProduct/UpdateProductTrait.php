<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProduct;

trait UpdateProductTrait
{
    /**
     * @param UpdateProductRequest $args
     * @return UpdateProductResponse
     */
    public function updateProduct(UpdateProductRequest $args)
    {
        $result = parent::updateProduct($args->toArray());
        return new UpdateProductResponse($result->toArray());
    }
}
