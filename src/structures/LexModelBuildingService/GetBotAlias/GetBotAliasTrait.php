<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotAlias;

trait GetBotAliasTrait
{
    /**
     * @param GetBotAliasRequest $args
     * @return GetBotAliasResponse
     */
    public function getBotAlias(GetBotAliasRequest $args)
    {
        $result = parent::getBotAlias($args->toArray());
        return new GetBotAliasResponse($result->toArray());
    }
}
