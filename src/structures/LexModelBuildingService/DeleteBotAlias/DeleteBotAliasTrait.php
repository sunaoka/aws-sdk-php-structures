<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\DeleteBotAlias;

trait DeleteBotAliasTrait
{
    /**
     * @param DeleteBotAliasRequest $args
     * @return void
     */
    public function deleteBotAlias(DeleteBotAliasRequest $args)
    {
        parent::deleteBotAlias($args->toArray());
    }
}
