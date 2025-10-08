<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteDataProduct;

trait DeleteDataProductTrait
{
    /**
     * @param DeleteDataProductRequest $args
     * @return DeleteDataProductResponse
     */
    public function deleteDataProduct(DeleteDataProductRequest $args)
    {
        $result = parent::deleteDataProduct($args->toArray());
        return new DeleteDataProductResponse($result->toArray());
    }
}
