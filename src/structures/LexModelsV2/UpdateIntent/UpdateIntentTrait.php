<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent;

trait UpdateIntentTrait
{
    /**
     * @param UpdateIntentRequest $args
     * @return UpdateIntentResponse
     */
    public function updateIntent(UpdateIntentRequest $args)
    {
        $result = parent::updateIntent($args->toArray());
        return new UpdateIntentResponse($result->toArray());
    }
}
