<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotLocales;

trait ListBotLocalesTrait
{
    /**
     * @param ListBotLocalesRequest $args
     * @return ListBotLocalesResponse
     */
    public function listBotLocales(ListBotLocalesRequest $args)
    {
        $result = parent::listBotLocales($args->toArray());
        return new ListBotLocalesResponse($result->toArray());
    }
}
