<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteContactFlowAlias;

trait DeleteContactFlowAliasTrait
{
    /**
     * @param DeleteContactFlowAliasRequest $args
     * @return DeleteContactFlowAliasResponse
     */
    public function deleteContactFlowAlias(DeleteContactFlowAliasRequest $args)
    {
        $result = parent::deleteContactFlowAlias($args->toArray());
        return new DeleteContactFlowAliasResponse($result->toArray());
    }
}
