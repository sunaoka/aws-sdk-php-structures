<?php

namespace Sunaoka\Aws\Structures\Waf\ListIPSets;

trait ListIPSetsTrait
{
    /**
     * @param ListIPSetsRequest $args
     * @return ListIPSetsResponse
     */
    public function listIPSets(ListIPSetsRequest $args)
    {
        $result = parent::listIPSets($args->toArray());
        return new ListIPSetsResponse($result->toArray());
    }
}
