<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetProductPage;

trait GetProductPageTrait
{
    /**
     * @param GetProductPageRequest $args
     * @return GetProductPageResponse
     */
    public function getProductPage(GetProductPageRequest $args)
    {
        $result = parent::getProductPage($args->toArray());
        return new GetProductPageResponse($result->toArray());
    }
}
