<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBotLocale;

trait DeleteBotLocaleTrait
{
    /**
     * @param DeleteBotLocaleRequest $args
     * @return DeleteBotLocaleResponse
     */
    public function deleteBotLocale(DeleteBotLocaleRequest $args)
    {
        $result = parent::deleteBotLocale($args->toArray());
        return new DeleteBotLocaleResponse($result->toArray());
    }
}
