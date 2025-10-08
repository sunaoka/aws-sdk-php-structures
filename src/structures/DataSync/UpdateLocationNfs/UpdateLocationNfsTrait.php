<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationNfs;

trait UpdateLocationNfsTrait
{
    /**
     * @param UpdateLocationNfsRequest $args
     * @return UpdateLocationNfsResponse
     */
    public function updateLocationNfs(UpdateLocationNfsRequest $args)
    {
        $result = parent::updateLocationNfs($args->toArray());
        return new UpdateLocationNfsResponse($result->toArray());
    }
}
