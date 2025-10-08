<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotAlias;

trait CreateBotAliasTrait
{
    /**
     * @param CreateBotAliasRequest $args
     * @return CreateBotAliasResponse
     */
    public function createBotAlias(CreateBotAliasRequest $args)
    {
        $result = parent::createBotAlias($args->toArray());
        return new CreateBotAliasResponse($result->toArray());
    }
}
