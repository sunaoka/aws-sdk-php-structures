<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotLocale;

trait DescribeBotLocaleTrait
{
    /**
     * @param DescribeBotLocaleRequest $args
     * @return DescribeBotLocaleResponse
     */
    public function describeBotLocale(DescribeBotLocaleRequest $args)
    {
        $result = parent::describeBotLocale($args->toArray());
        return new DescribeBotLocaleResponse($result->toArray());
    }
}
