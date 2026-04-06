<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationFsxWindows;

trait UpdateLocationFsxWindowsTrait
{
    /**
     * @param UpdateLocationFsxWindowsRequest $args
     * @return UpdateLocationFsxWindowsResponse
     */
    public function updateLocationFsxWindows(UpdateLocationFsxWindowsRequest $args)
    {
        $result = parent::updateLocationFsxWindows($args->toArray());
        return new UpdateLocationFsxWindowsResponse($result->toArray());
    }
}
