<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationFsxOpenZfs;

trait UpdateLocationFsxOpenZfsTrait
{
    /**
     * @param UpdateLocationFsxOpenZfsRequest $args
     * @return UpdateLocationFsxOpenZfsResponse
     */
    public function updateLocationFsxOpenZfs(UpdateLocationFsxOpenZfsRequest $args)
    {
        $result = parent::updateLocationFsxOpenZfs($args->toArray());
        return new UpdateLocationFsxOpenZfsResponse($result->toArray());
    }
}
