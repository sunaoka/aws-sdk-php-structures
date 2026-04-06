<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateProductPage;

trait UpdateProductPageTrait
{
    /**
     * @param UpdateProductPageRequest $args
     * @return UpdateProductPageResponse
     */
    public function updateProductPage(UpdateProductPageRequest $args)
    {
        $result = parent::updateProductPage($args->toArray());
        return new UpdateProductPageResponse($result->toArray());
    }
}
