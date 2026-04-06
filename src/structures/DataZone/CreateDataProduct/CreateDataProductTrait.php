<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataProduct;

trait CreateDataProductTrait
{
    /**
     * @param CreateDataProductRequest $args
     * @return CreateDataProductResponse
     */
    public function createDataProduct(CreateDataProductRequest $args)
    {
        $result = parent::createDataProduct($args->toArray());
        return new CreateDataProductResponse($result->toArray());
    }
}
