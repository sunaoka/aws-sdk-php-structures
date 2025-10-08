<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBot;

trait DescribeBotTrait
{
    /**
     * @param DescribeBotRequest $args
     * @return DescribeBotResponse
     */
    public function describeBot(DescribeBotRequest $args)
    {
        $result = parent::describeBot($args->toArray());
        return new DescribeBotResponse($result->toArray());
    }
}
