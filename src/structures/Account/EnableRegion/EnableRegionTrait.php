<?php

namespace Sunaoka\Aws\Structures\Account\EnableRegion;

trait EnableRegionTrait
{
    /**
     * @param EnableRegionRequest $args
     * @return void
     */
    public function enableRegion(EnableRegionRequest $args)
    {
        parent::enableRegion($args->toArray());
    }
}
