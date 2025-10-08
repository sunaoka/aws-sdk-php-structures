<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotAliases;

trait GetBotAliasesTrait
{
    /**
     * @param GetBotAliasesRequest $args
     * @return GetBotAliasesResponse
     */
    public function getBotAliases(GetBotAliasesRequest $args)
    {
        $result = parent::getBotAliases($args->toArray());
        return new GetBotAliasesResponse($result->toArray());
    }
}
