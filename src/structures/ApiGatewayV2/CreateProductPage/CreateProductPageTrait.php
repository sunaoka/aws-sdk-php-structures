<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateProductPage;

trait CreateProductPageTrait
{
    /**
     * @param CreateProductPageRequest $args
     * @return CreateProductPageResponse
     */
    public function createProductPage(CreateProductPageRequest $args)
    {
        $result = parent::createProductPage($args->toArray());
        return new CreateProductPageResponse($result->toArray());
    }
}
