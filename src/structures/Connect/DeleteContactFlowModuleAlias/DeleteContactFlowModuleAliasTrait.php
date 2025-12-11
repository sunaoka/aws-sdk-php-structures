<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteContactFlowModuleAlias;

trait DeleteContactFlowModuleAliasTrait
{
    /**
     * @param DeleteContactFlowModuleAliasRequest $args
     * @return DeleteContactFlowModuleAliasResponse
     */
    public function deleteContactFlowModuleAlias(DeleteContactFlowModuleAliasRequest $args)
    {
        $result = parent::deleteContactFlowModuleAlias($args->toArray());
        return new DeleteContactFlowModuleAliasResponse($result->toArray());
    }
}
