<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteMeteredProduct;

trait DeleteMeteredProductTrait
{
    /**
     * @param DeleteMeteredProductRequest $args
     * @return DeleteMeteredProductResponse
     */
    public function deleteMeteredProduct(DeleteMeteredProductRequest $args)
    {
        $result = parent::deleteMeteredProduct($args->toArray());
        return new DeleteMeteredProductResponse($result->toArray());
    }
}
