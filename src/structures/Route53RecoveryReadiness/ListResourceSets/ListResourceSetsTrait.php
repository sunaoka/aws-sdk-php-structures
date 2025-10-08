<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\ListResourceSets;

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
