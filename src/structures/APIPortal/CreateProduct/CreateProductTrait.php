<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreateProduct;

trait CreateProductTrait
{
    /**
     * @param CreateProductRequest $args
     * @return CreateProductResponse
     */
    public function createProduct(CreateProductRequest $args)
    {
        $result = parent::createProduct($args->toArray());
        return new CreateProductResponse($result->toArray());
    }
}
