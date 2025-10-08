<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationFsxWindows;

trait CreateLocationFsxWindowsTrait
{
    /**
     * @param CreateLocationFsxWindowsRequest $args
     * @return CreateLocationFsxWindowsResponse
     */
    public function createLocationFsxWindows(CreateLocationFsxWindowsRequest $args)
    {
        $result = parent::createLocationFsxWindows($args->toArray());
        return new CreateLocationFsxWindowsResponse($result->toArray());
    }
}
