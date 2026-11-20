<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListAvailableModuleVersions;

trait ListAvailableModuleVersionsTrait
{
    /**
     * @param ListAvailableModuleVersionsRequest $args
     * @return ListAvailableModuleVersionsResponse
     */
    public function listAvailableModuleVersions(ListAvailableModuleVersionsRequest $args)
    {
        $result = parent::listAvailableModuleVersions($args->toArray());
        return new ListAvailableModuleVersionsResponse($result->toArray());
    }
}
