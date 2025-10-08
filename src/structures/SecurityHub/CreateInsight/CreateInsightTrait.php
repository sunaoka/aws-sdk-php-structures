<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateInsight;

trait CreateInsightTrait
{
    /**
     * @param CreateInsightRequest $args
     * @return CreateInsightResponse
     */
    public function createInsight(CreateInsightRequest $args)
    {
        $result = parent::createInsight($args->toArray());
        return new CreateInsightResponse($result->toArray());
    }
}
