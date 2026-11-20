<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetAvailableModule;

trait GetAvailableModuleTrait
{
    /**
     * @param GetAvailableModuleRequest $args
     * @return GetAvailableModuleResponse
     */
    public function getAvailableModule(GetAvailableModuleRequest $args)
    {
        $result = parent::getAvailableModule($args->toArray());
        return new GetAvailableModuleResponse($result->toArray());
    }
}
