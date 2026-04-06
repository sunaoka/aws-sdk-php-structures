<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactFlowModuleAlias;

trait UpdateContactFlowModuleAliasTrait
{
    /**
     * @param UpdateContactFlowModuleAliasRequest $args
     * @return UpdateContactFlowModuleAliasResponse
     */
    public function updateContactFlowModuleAlias(UpdateContactFlowModuleAliasRequest $args)
    {
        $result = parent::updateContactFlowModuleAlias($args->toArray());
        return new UpdateContactFlowModuleAliasResponse($result->toArray());
    }
}
