<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlowAliases;

trait ListContactFlowAliasesTrait
{
    /**
     * @param ListContactFlowAliasesRequest $args
     * @return ListContactFlowAliasesResponse
     */
    public function listContactFlowAliases(ListContactFlowAliasesRequest $args)
    {
        $result = parent::listContactFlowAliases($args->toArray());
        return new ListContactFlowAliasesResponse($result->toArray());
    }
}
