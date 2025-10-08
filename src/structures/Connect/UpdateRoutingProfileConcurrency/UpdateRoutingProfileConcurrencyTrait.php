<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRoutingProfileConcurrency;

trait UpdateRoutingProfileConcurrencyTrait
{
    /**
     * @param UpdateRoutingProfileConcurrencyRequest $args
     * @return void
     */
    public function updateRoutingProfileConcurrency(UpdateRoutingProfileConcurrencyRequest $args)
    {
        parent::updateRoutingProfileConcurrency($args->toArray());
    }
}
