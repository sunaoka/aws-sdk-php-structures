<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\BuildBotLocale;

trait BuildBotLocaleTrait
{
    /**
     * @param BuildBotLocaleRequest $args
     * @return BuildBotLocaleResponse
     */
    public function buildBotLocale(BuildBotLocaleRequest $args)
    {
        $result = parent::buildBotLocale($args->toArray());
        return new BuildBotLocaleResponse($result->toArray());
    }
}
