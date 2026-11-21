<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListProductApiPages;

trait ListProductApiPagesTrait
{
    /**
     * @param ListProductApiPagesRequest $args
     * @return ListProductApiPagesResponse
     */
    public function listProductApiPages(ListProductApiPagesRequest $args)
    {
        $result = parent::listProductApiPages($args->toArray());
        return new ListProductApiPagesResponse($result->toArray());
    }
}
