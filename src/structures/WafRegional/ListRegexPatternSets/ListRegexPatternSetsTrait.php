<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListRegexPatternSets;

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
