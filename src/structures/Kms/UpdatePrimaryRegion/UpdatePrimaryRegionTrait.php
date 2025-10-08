<?php

namespace Sunaoka\Aws\Structures\Kms\UpdatePrimaryRegion;

trait UpdatePrimaryRegionTrait
{
    /**
     * @param UpdatePrimaryRegionRequest $args
     * @return void
     */
    public function updatePrimaryRegion(UpdatePrimaryRegionRequest $args)
    {
        parent::updatePrimaryRegion($args->toArray());
    }
}
