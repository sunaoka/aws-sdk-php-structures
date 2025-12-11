<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ListProductPages;

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
