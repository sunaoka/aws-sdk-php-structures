<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotLocale;

trait UpdateBotLocaleTrait
{
    /**
     * @param UpdateBotLocaleRequest $args
     * @return UpdateBotLocaleResponse
     */
    public function updateBotLocale(UpdateBotLocaleRequest $args)
    {
        $result = parent::updateBotLocale($args->toArray());
        return new UpdateBotLocaleResponse($result->toArray());
    }
}
