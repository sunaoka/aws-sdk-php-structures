<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSets;

trait ListReadSetsTrait
{
    /**
     * @param ListReadSetsRequest $args
     * @return ListReadSetsResponse
     */
    public function listReadSets(ListReadSetsRequest $args)
    {
        $result = parent::listReadSets($args->toArray());
        return new ListReadSetsResponse($result->toArray());
    }
}
