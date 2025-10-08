<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowAlias;

trait GetFlowAliasTrait
{
    /**
     * @param GetFlowAliasRequest $args
     * @return GetFlowAliasResponse
     */
    public function getFlowAlias(GetFlowAliasRequest $args)
    {
        $result = parent::getFlowAlias($args->toArray());
        return new GetFlowAliasResponse($result->toArray());
    }
}
