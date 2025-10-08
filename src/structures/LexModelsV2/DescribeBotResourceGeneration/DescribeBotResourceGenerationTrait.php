<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotResourceGeneration;

trait DescribeBotResourceGenerationTrait
{
    /**
     * @param DescribeBotResourceGenerationRequest $args
     * @return DescribeBotResourceGenerationResponse
     */
    public function describeBotResourceGeneration(DescribeBotResourceGenerationRequest $args)
    {
        $result = parent::describeBotResourceGeneration($args->toArray());
        return new DescribeBotResourceGenerationResponse($result->toArray());
    }
}
