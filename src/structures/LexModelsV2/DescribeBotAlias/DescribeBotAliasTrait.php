<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotAlias;

trait DescribeBotAliasTrait
{
    /**
     * @param DescribeBotAliasRequest $args
     * @return DescribeBotAliasResponse
     */
    public function describeBotAlias(DescribeBotAliasRequest $args)
    {
        $result = parent::describeBotAlias($args->toArray());
        return new DescribeBotAliasResponse($result->toArray());
    }
}
