<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotLocale;

trait CreateBotLocaleTrait
{
    /**
     * @param CreateBotLocaleRequest $args
     * @return CreateBotLocaleResponse
     */
    public function createBotLocale(CreateBotLocaleRequest $args)
    {
        $result = parent::createBotLocale($args->toArray());
        return new CreateBotLocaleResponse($result->toArray());
    }
}
