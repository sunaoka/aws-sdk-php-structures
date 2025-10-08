<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListRegexPatternSets;

trait ListRegexPatternSetsTrait
{
    /**
     * @param ListRegexPatternSetsRequest $args
     * @return ListRegexPatternSetsResponse
     */
    public function listRegexPatternSets(ListRegexPatternSetsRequest $args)
    {
        $result = parent::listRegexPatternSets($args->toArray());
        return new ListRegexPatternSetsResponse($result->toArray());
    }
}
