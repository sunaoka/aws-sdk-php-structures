<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetResourceExplorerSetup;

trait GetResourceExplorerSetupTrait
{
    /**
     * @param GetResourceExplorerSetupRequest $args
     * @return GetResourceExplorerSetupResponse
     */
    public function getResourceExplorerSetup(GetResourceExplorerSetupRequest $args)
    {
        $result = parent::getResourceExplorerSetup($args->toArray());
        return new GetResourceExplorerSetupResponse($result->toArray());
    }
}
