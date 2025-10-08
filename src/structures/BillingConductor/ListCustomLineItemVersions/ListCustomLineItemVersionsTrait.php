<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItemVersions;

trait ListCustomLineItemVersionsTrait
{
    /**
     * @param ListCustomLineItemVersionsRequest $args
     * @return ListCustomLineItemVersionsResponse
     */
    public function listCustomLineItemVersions(ListCustomLineItemVersionsRequest $args)
    {
        $result = parent::listCustomLineItemVersions($args->toArray());
        return new ListCustomLineItemVersionsResponse($result->toArray());
    }
}
