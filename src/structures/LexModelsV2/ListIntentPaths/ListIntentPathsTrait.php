<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentPaths;

trait ListIntentPathsTrait
{
    /**
     * @param ListIntentPathsRequest $args
     * @return ListIntentPathsResponse
     */
    public function listIntentPaths(ListIntentPathsRequest $args)
    {
        $result = parent::listIntentPaths($args->toArray());
        return new ListIntentPathsResponse($result->toArray());
    }
}
