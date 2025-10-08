<?php

namespace Sunaoka\Aws\Structures\Connect\CreateContactFlowModule;

trait CreateContactFlowModuleTrait
{
    /**
     * @param CreateContactFlowModuleRequest $args
     * @return CreateContactFlowModuleResponse
     */
    public function createContactFlowModule(CreateContactFlowModuleRequest $args)
    {
        $result = parent::createContactFlowModule($args->toArray());
        return new CreateContactFlowModuleResponse($result->toArray());
    }
}
