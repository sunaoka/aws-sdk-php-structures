<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\DeleteResourceExplorerSetup;

trait DeleteResourceExplorerSetupTrait
{
    /**
     * @param DeleteResourceExplorerSetupRequest $args
     * @return DeleteResourceExplorerSetupResponse
     */
    public function deleteResourceExplorerSetup(DeleteResourceExplorerSetupRequest $args)
    {
        $result = parent::deleteResourceExplorerSetup($args->toArray());
        return new DeleteResourceExplorerSetupResponse($result->toArray());
    }
}
