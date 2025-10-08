<?php

namespace Sunaoka\Aws\Structures\Waf\ListRegexMatchSets;

trait ListRegexMatchSetsTrait
{
    /**
     * @param ListRegexMatchSetsRequest $args
     * @return ListRegexMatchSetsResponse
     */
    public function listRegexMatchSets(ListRegexMatchSetsRequest $args)
    {
        $result = parent::listRegexMatchSets($args->toArray());
        return new ListRegexMatchSetsResponse($result->toArray());
    }
}
