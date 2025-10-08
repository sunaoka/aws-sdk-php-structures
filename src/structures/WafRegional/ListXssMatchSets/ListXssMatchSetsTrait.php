<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListXssMatchSets;

trait ListXssMatchSetsTrait
{
    /**
     * @param ListXssMatchSetsRequest $args
     * @return ListXssMatchSetsResponse
     */
    public function listXssMatchSets(ListXssMatchSetsRequest $args)
    {
        $result = parent::listXssMatchSets($args->toArray());
        return new ListXssMatchSetsResponse($result->toArray());
    }
}
