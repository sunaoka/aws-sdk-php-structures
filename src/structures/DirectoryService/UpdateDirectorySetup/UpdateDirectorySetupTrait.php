<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateDirectorySetup;

trait UpdateDirectorySetupTrait
{
    /**
     * @param UpdateDirectorySetupRequest $args
     * @return UpdateDirectorySetupResponse
     */
    public function updateDirectorySetup(UpdateDirectorySetupRequest $args)
    {
        $result = parent::updateDirectorySetup($args->toArray());
        return new UpdateDirectorySetupResponse($result->toArray());
    }
}
