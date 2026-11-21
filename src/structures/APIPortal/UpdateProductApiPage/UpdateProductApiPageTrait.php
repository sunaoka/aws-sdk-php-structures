<?php

namespace Sunaoka\Aws\Structures\APIPortal\UpdateProductApiPage;

trait UpdateProductApiPageTrait
{
    /**
     * @param UpdateProductApiPageRequest $args
     * @return UpdateProductApiPageResponse
     */
    public function updateProductApiPage(UpdateProductApiPageRequest $args)
    {
        $result = parent::updateProductApiPage($args->toArray());
        return new UpdateProductApiPageResponse($result->toArray());
    }
}
