<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotAliases;

trait ListBotAliasesTrait
{
    /**
     * @param ListBotAliasesRequest $args
     * @return ListBotAliasesResponse
     */
    public function listBotAliases(ListBotAliasesRequest $args)
    {
        $result = parent::listBotAliases($args->toArray());
        return new ListBotAliasesResponse($result->toArray());
    }
}
