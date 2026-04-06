<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteContactFlowModuleVersion;

trait DeleteContactFlowModuleVersionTrait
{
    /**
     * @param DeleteContactFlowModuleVersionRequest $args
     * @return DeleteContactFlowModuleVersionResponse
     */
    public function deleteContactFlowModuleVersion(DeleteContactFlowModuleVersionRequest $args)
    {
        $result = parent::deleteContactFlowModuleVersion($args->toArray());
        return new DeleteContactFlowModuleVersionResponse($result->toArray());
    }
}
