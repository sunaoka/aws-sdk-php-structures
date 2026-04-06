<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlowModuleAliases;

trait ListContactFlowModuleAliasesTrait
{
    /**
     * @param ListContactFlowModuleAliasesRequest $args
     * @return ListContactFlowModuleAliasesResponse
     */
    public function listContactFlowModuleAliases(ListContactFlowModuleAliasesRequest $args)
    {
        $result = parent::listContactFlowModuleAliases($args->toArray());
        return new ListContactFlowModuleAliasesResponse($result->toArray());
    }
}
