<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListSizeConstraintSets;

trait ListSizeConstraintSetsTrait
{
    /**
     * @param ListSizeConstraintSetsRequest $args
     * @return ListSizeConstraintSetsResponse
     */
    public function listSizeConstraintSets(ListSizeConstraintSetsRequest $args)
    {
        $result = parent::listSizeConstraintSets($args->toArray());
        return new ListSizeConstraintSetsResponse($result->toArray());
    }
}
