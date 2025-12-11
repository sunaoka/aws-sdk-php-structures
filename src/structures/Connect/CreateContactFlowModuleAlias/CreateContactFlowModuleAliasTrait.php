<?php

namespace Sunaoka\Aws\Structures\Connect\CreateContactFlowModuleAlias;

trait CreateContactFlowModuleAliasTrait
{
    /**
     * @param CreateContactFlowModuleAliasRequest $args
     * @return CreateContactFlowModuleAliasResponse
     */
    public function createContactFlowModuleAlias(CreateContactFlowModuleAliasRequest $args)
    {
        $result = parent::createContactFlowModuleAlias($args->toArray());
        return new CreateContactFlowModuleAliasResponse($result->toArray());
    }
}
