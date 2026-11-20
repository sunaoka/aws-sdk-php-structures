<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetAvailableModuleVersion;

trait GetAvailableModuleVersionTrait
{
    /**
     * @param GetAvailableModuleVersionRequest $args
     * @return GetAvailableModuleVersionResponse
     */
    public function getAvailableModuleVersion(GetAvailableModuleVersionRequest $args)
    {
        $result = parent::getAvailableModuleVersion($args->toArray());
        return new GetAvailableModuleVersionResponse($result->toArray());
    }
}
