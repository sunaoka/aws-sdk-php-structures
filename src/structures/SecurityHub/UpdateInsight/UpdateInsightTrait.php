<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateInsight;

trait UpdateInsightTrait
{
    /**
     * @param UpdateInsightRequest $args
     * @return UpdateInsightResponse
     */
    public function updateInsight(UpdateInsightRequest $args)
    {
        $result = parent::updateInsight($args->toArray());
        return new UpdateInsightResponse($result->toArray());
    }
}
