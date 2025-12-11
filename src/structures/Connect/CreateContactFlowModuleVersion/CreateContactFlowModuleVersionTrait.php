<?php

namespace Sunaoka\Aws\Structures\Connect\CreateContactFlowModuleVersion;

trait CreateContactFlowModuleVersionTrait
{
    /**
     * @param CreateContactFlowModuleVersionRequest $args
     * @return CreateContactFlowModuleVersionResponse
     */
    public function createContactFlowModuleVersion(CreateContactFlowModuleVersionRequest $args)
    {
        $result = parent::createContactFlowModuleVersion($args->toArray());
        return new CreateContactFlowModuleVersionResponse($result->toArray());
    }
}
