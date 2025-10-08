<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRoutingProfileName;

trait UpdateRoutingProfileNameTrait
{
    /**
     * @param UpdateRoutingProfileNameRequest $args
     * @return void
     */
    public function updateRoutingProfileName(UpdateRoutingProfileNameRequest $args)
    {
        parent::updateRoutingProfileName($args->toArray());
    }
}
