<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreateProductApiPage;

trait CreateProductApiPageTrait
{
    /**
     * @param CreateProductApiPageRequest $args
     * @return CreateProductApiPageResponse
     */
    public function createProductApiPage(CreateProductApiPageRequest $args)
    {
        $result = parent::createProductApiPage($args->toArray());
        return new CreateProductApiPageResponse($result->toArray());
    }
}
