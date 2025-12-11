<?php

namespace Sunaoka\Aws\Structures\Connect\ListSecurityProfileFlowModules;

trait ListSecurityProfileFlowModulesTrait
{
    /**
     * @param ListSecurityProfileFlowModulesRequest $args
     * @return ListSecurityProfileFlowModulesResponse
     */
    public function listSecurityProfileFlowModules(ListSecurityProfileFlowModulesRequest $args)
    {
        $result = parent::listSecurityProfileFlowModules($args->toArray());
        return new ListSecurityProfileFlowModulesResponse($result->toArray());
    }
}
