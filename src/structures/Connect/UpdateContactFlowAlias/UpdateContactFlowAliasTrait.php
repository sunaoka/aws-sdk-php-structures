<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactFlowAlias;

trait UpdateContactFlowAliasTrait
{
    /**
     * @param UpdateContactFlowAliasRequest $args
     * @return UpdateContactFlowAliasResponse
     */
    public function updateContactFlowAlias(UpdateContactFlowAliasRequest $args)
    {
        $result = parent::updateContactFlowAlias($args->toArray());
        return new UpdateContactFlowAliasResponse($result->toArray());
    }
}
