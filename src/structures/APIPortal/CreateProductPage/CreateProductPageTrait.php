<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreateProductPage;

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
