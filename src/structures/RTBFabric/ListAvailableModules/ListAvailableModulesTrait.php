<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListAvailableModules;

trait ListAvailableModulesTrait
{
    /**
     * @param ListAvailableModulesRequest $args
     * @return ListAvailableModulesResponse
     */
    public function listAvailableModules(ListAvailableModulesRequest $args)
    {
        $result = parent::listAvailableModules($args->toArray());
        return new ListAvailableModulesResponse($result->toArray());
    }
}
