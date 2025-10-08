<?php

namespace Sunaoka\Aws\Structures\Deadline\PutMeteredProduct;

trait PutMeteredProductTrait
{
    /**
     * @param PutMeteredProductRequest $args
     * @return PutMeteredProductResponse
     */
    public function putMeteredProduct(PutMeteredProductRequest $args)
    {
        $result = parent::putMeteredProduct($args->toArray());
        return new PutMeteredProductResponse($result->toArray());
    }
}
