<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdateInstanceCustomHealthStatus;

trait UpdateInstanceCustomHealthStatusTrait
{
    /**
     * @param UpdateInstanceCustomHealthStatusRequest $args
     * @return void
     */
    public function updateInstanceCustomHealthStatus(UpdateInstanceCustomHealthStatusRequest $args)
    {
        parent::updateInstanceCustomHealthStatus($args->toArray());
    }
}
