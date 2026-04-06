<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataProduct;

trait GetDataProductTrait
{
    /**
     * @param GetDataProductRequest $args
     * @return GetDataProductResponse
     */
    public function getDataProduct(GetDataProductRequest $args)
    {
        $result = parent::getDataProduct($args->toArray());
        return new GetDataProductResponse($result->toArray());
    }
}
