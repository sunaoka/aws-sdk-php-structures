<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListFlowAliases;

trait ListFlowAliasesTrait
{
    /**
     * @param ListFlowAliasesRequest $args
     * @return ListFlowAliasesResponse
     */
    public function listFlowAliases(ListFlowAliasesRequest $args)
    {
        $result = parent::listFlowAliases($args->toArray());
        return new ListFlowAliasesResponse($result->toArray());
    }
}
