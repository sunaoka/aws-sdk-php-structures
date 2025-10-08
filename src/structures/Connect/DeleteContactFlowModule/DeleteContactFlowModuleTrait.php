<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteContactFlowModule;

trait DeleteContactFlowModuleTrait
{
    /**
     * @param DeleteContactFlowModuleRequest $args
     * @return DeleteContactFlowModuleResponse
     */
    public function deleteContactFlowModule(DeleteContactFlowModuleRequest $args)
    {
        $result = parent::deleteContactFlowModule($args->toArray());
        return new DeleteContactFlowModuleResponse($result->toArray());
    }
}
