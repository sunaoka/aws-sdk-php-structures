<?php

namespace Sunaoka\Aws\Structures\Connect\CreateContactFlowAlias;

trait CreateContactFlowAliasTrait
{
    /**
     * @param CreateContactFlowAliasRequest $args
     * @return CreateContactFlowAliasResponse
     */
    public function createContactFlowAlias(CreateContactFlowAliasRequest $args)
    {
        $result = parent::createContactFlowAlias($args->toArray());
        return new CreateContactFlowAliasResponse($result->toArray());
    }
}
