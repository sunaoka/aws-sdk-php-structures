<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotAlias;

trait UpdateBotAliasTrait
{
    /**
     * @param UpdateBotAliasRequest $args
     * @return UpdateBotAliasResponse
     */
    public function updateBotAlias(UpdateBotAliasRequest $args)
    {
        $result = parent::updateBotAlias($args->toArray());
        return new UpdateBotAliasResponse($result->toArray());
    }
}
