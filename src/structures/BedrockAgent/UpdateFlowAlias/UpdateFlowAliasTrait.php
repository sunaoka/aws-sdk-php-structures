<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlowAlias;

trait UpdateFlowAliasTrait
{
    /**
     * @param UpdateFlowAliasRequest $args
     * @return UpdateFlowAliasResponse
     */
    public function updateFlowAlias(UpdateFlowAliasRequest $args)
    {
        $result = parent::updateFlowAlias($args->toArray());
        return new UpdateFlowAliasResponse($result->toArray());
    }
}
