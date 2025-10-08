<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlowModules;

trait ListContactFlowModulesTrait
{
    /**
     * @param ListContactFlowModulesRequest $args
     * @return ListContactFlowModulesResponse
     */
    public function listContactFlowModules(ListContactFlowModulesRequest $args)
    {
        $result = parent::listContactFlowModules($args->toArray());
        return new ListContactFlowModulesResponse($result->toArray());
    }
}
