<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBuiltInIntents;

trait ListBuiltInIntentsTrait
{
    /**
     * @param ListBuiltInIntentsRequest $args
     * @return ListBuiltInIntentsResponse
     */
    public function listBuiltInIntents(ListBuiltInIntentsRequest $args)
    {
        $result = parent::listBuiltInIntents($args->toArray());
        return new ListBuiltInIntentsResponse($result->toArray());
    }
}
