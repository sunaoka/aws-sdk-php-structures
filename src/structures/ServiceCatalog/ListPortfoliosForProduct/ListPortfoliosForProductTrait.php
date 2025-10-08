<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListPortfoliosForProduct;

trait ListPortfoliosForProductTrait
{
    /**
     * @param ListPortfoliosForProductRequest $args
     * @return ListPortfoliosForProductResponse
     */
    public function listPortfoliosForProduct(ListPortfoliosForProductRequest $args)
    {
        $result = parent::listPortfoliosForProduct($args->toArray());
        return new ListPortfoliosForProductResponse($result->toArray());
    }
}
