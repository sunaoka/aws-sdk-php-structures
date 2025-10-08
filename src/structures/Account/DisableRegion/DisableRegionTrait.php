<?php

namespace Sunaoka\Aws\Structures\Account\DisableRegion;

trait DisableRegionTrait
{
    /**
     * @param DisableRegionRequest $args
     * @return void
     */
    public function disableRegion(DisableRegionRequest $args)
    {
        parent::disableRegion($args->toArray());
    }
}
