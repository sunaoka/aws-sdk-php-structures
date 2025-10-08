<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSets;

trait ListTestSetsTrait
{
    /**
     * @param ListTestSetsRequest $args
     * @return ListTestSetsResponse
     */
    public function listTestSets(ListTestSetsRequest $args)
    {
        $result = parent::listTestSets($args->toArray());
        return new ListTestSetsResponse($result->toArray());
    }
}
