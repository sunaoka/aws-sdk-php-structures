<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CopyProduct;

trait CopyProductTrait
{
    /**
     * @param CopyProductRequest $args
     * @return CopyProductResponse
     */
    public function copyProduct(CopyProductRequest $args)
    {
        $result = parent::copyProduct($args->toArray());
        return new CopyProductResponse($result->toArray());
    }
}
