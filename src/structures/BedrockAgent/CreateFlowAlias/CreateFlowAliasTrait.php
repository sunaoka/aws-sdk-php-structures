<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowAlias;

trait CreateFlowAliasTrait
{
    /**
     * @param CreateFlowAliasRequest $args
     * @return CreateFlowAliasResponse
     */
    public function createFlowAlias(CreateFlowAliasRequest $args)
    {
        $result = parent::createFlowAlias($args->toArray());
        return new CreateFlowAliasResponse($result->toArray());
    }
}
