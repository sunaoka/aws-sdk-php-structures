<?php

namespace Sunaoka\Aws\Structures\FMS\ListResourceSets;

trait ListResourceSetsTrait
{
    /**
     * @param ListResourceSetsRequest $args
     * @return ListResourceSetsResponse
     */
    public function listResourceSets(ListResourceSetsRequest $args)
    {
        $result = parent::listResourceSets($args->toArray());
        return new ListResourceSetsResponse($result->toArray());
    }
}
