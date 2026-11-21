<?php

namespace Sunaoka\Aws\Structures\APIPortal\DeleteProductPage;

trait DeleteProductPageTrait
{
    /**
     * @param DeleteProductPageRequest $args
     * @return void
     */
    public function deleteProductPage(DeleteProductPageRequest $args)
    {
        parent::deleteProductPage($args->toArray());
    }
}
