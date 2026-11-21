<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListProductPages;

trait ListProductPagesTrait
{
    /**
     * @param ListProductPagesRequest $args
     * @return ListProductPagesResponse
     */
    public function listProductPages(ListProductPagesRequest $args)
    {
        $result = parent::listProductPages($args->toArray());
        return new ListProductPagesResponse($result->toArray());
    }
}
