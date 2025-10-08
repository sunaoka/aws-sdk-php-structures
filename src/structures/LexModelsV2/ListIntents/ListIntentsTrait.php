<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntents;

trait ListIntentsTrait
{
    /**
     * @param ListIntentsRequest $args
     * @return ListIntentsResponse
     */
    public function listIntents(ListIntentsRequest $args)
    {
        $result = parent::listIntents($args->toArray());
        return new ListIntentsResponse($result->toArray());
    }
}
