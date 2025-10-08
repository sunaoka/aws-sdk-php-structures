<?php

namespace Sunaoka\Aws\Structures\Waf\ListByteMatchSets;

trait ListByteMatchSetsTrait
{
    /**
     * @param ListByteMatchSetsRequest $args
     * @return ListByteMatchSetsResponse
     */
    public function listByteMatchSets(ListByteMatchSetsRequest $args)
    {
        $result = parent::listByteMatchSets($args->toArray());
        return new ListByteMatchSetsResponse($result->toArray());
    }
}
