<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBotAlias;

trait DeleteBotAliasTrait
{
    /**
     * @param DeleteBotAliasRequest $args
     * @return DeleteBotAliasResponse
     */
    public function deleteBotAlias(DeleteBotAliasRequest $args)
    {
        $result = parent::deleteBotAlias($args->toArray());
        return new DeleteBotAliasResponse($result->toArray());
    }
}
