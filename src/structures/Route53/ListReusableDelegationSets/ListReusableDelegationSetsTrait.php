<?php

namespace Sunaoka\Aws\Structures\Route53\ListReusableDelegationSets;

trait ListReusableDelegationSetsTrait
{
    /**
     * @param ListReusableDelegationSetsRequest $args
     * @return ListReusableDelegationSetsResponse
     */
    public function listReusableDelegationSets(ListReusableDelegationSetsRequest $args)
    {
        $result = parent::listReusableDelegationSets($args->toArray());
        return new ListReusableDelegationSetsResponse($result->toArray());
    }
}
