<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationSmb;

trait UpdateLocationSmbTrait
{
    /**
     * @param UpdateLocationSmbRequest $args
     * @return UpdateLocationSmbResponse
     */
    public function updateLocationSmb(UpdateLocationSmbRequest $args)
    {
        $result = parent::updateLocationSmb($args->toArray());
        return new UpdateLocationSmbResponse($result->toArray());
    }
}
