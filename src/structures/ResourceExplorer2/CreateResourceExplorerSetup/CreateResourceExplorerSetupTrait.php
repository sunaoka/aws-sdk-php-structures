<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\CreateResourceExplorerSetup;

trait CreateResourceExplorerSetupTrait
{
    /**
     * @param CreateResourceExplorerSetupRequest $args
     * @return CreateResourceExplorerSetupResponse
     */
    public function createResourceExplorerSetup(CreateResourceExplorerSetupRequest $args)
    {
        $result = parent::createResourceExplorerSetup($args->toArray());
        return new CreateResourceExplorerSetupResponse($result->toArray());
    }
}
