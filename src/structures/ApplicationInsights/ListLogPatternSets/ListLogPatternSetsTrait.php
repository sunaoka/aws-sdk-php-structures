<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListLogPatternSets;

trait ListLogPatternSetsTrait
{
    /**
     * @param ListLogPatternSetsRequest $args
     * @return ListLogPatternSetsResponse
     */
    public function listLogPatternSets(ListLogPatternSetsRequest $args)
    {
        $result = parent::listLogPatternSets($args->toArray());
        return new ListLogPatternSetsResponse($result->toArray());
    }
}
