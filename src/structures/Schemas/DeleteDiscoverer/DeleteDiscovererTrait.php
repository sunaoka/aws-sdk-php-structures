<?php

namespace Sunaoka\Aws\Structures\Schemas\DeleteDiscoverer;

trait DeleteDiscovererTrait
{
    /**
     * @param DeleteDiscovererRequest $args
     * @return void
     */
    public function deleteDiscoverer(DeleteDiscovererRequest $args)
    {
        parent::deleteDiscoverer($args->toArray());
    }
}
