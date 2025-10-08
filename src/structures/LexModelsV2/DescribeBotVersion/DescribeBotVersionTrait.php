<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotVersion;

trait DescribeBotVersionTrait
{
    /**
     * @param DescribeBotVersionRequest $args
     * @return DescribeBotVersionResponse
     */
    public function describeBotVersion(DescribeBotVersionRequest $args)
    {
        $result = parent::describeBotVersion($args->toArray());
        return new DescribeBotVersionResponse($result->toArray());
    }
}
