<?php

namespace Sunaoka\Aws\Structures\APIPortal\DeleteProductApiPage;

trait DeleteProductApiPageTrait
{
    /**
     * @param DeleteProductApiPageRequest $args
     * @return void
     */
    public function deleteProductApiPage(DeleteProductApiPageRequest $args)
    {
        parent::deleteProductApiPage($args->toArray());
    }
}
