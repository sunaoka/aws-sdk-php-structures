<?php

namespace Sunaoka\Aws\Structures\Schemas\DeleteRegistry;

trait DeleteRegistryTrait
{
    /**
     * @param DeleteRegistryRequest $args
     * @return void
     */
    public function deleteRegistry(DeleteRegistryRequest $args)
    {
        parent::deleteRegistry($args->toArray());
    }
}
