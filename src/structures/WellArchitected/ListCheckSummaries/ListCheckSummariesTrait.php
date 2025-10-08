<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListCheckSummaries;

trait ListCheckSummariesTrait
{
    /**
     * @param ListCheckSummariesRequest $args
     * @return ListCheckSummariesResponse
     */
    public function listCheckSummaries(ListCheckSummariesRequest $args)
    {
        $result = parent::listCheckSummaries($args->toArray());
        return new ListCheckSummariesResponse($result->toArray());
    }
}
