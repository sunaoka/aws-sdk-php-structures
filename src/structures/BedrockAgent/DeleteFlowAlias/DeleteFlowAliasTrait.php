<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteFlowAlias;

trait DeleteFlowAliasTrait
{
    /**
     * @param DeleteFlowAliasRequest $args
     * @return DeleteFlowAliasResponse
     */
    public function deleteFlowAlias(DeleteFlowAliasRequest $args)
    {
        $result = parent::deleteFlowAlias($args->toArray());
        return new DeleteFlowAliasResponse($result->toArray());
    }
}
