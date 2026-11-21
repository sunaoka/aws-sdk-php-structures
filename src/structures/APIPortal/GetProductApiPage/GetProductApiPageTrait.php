<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetProductApiPage;

trait GetProductApiPageTrait
{
    /**
     * @param GetProductApiPageRequest $args
     * @return GetProductApiPageResponse
     */
    public function getProductApiPage(GetProductApiPageRequest $args)
    {
        $result = parent::getProductApiPage($args->toArray());
        return new GetProductApiPageResponse($result->toArray());
    }
}
