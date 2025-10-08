<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationEfs;

trait UpdateLocationEfsTrait
{
    /**
     * @param UpdateLocationEfsRequest $args
     * @return UpdateLocationEfsResponse
     */
    public function updateLocationEfs(UpdateLocationEfsRequest $args)
    {
        $result = parent::updateLocationEfs($args->toArray());
        return new UpdateLocationEfsResponse($result->toArray());
    }
}
