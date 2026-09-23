<?php

namespace Sunaoka\Aws\Structures\Billing\ListBillingViewSegments;

trait ListBillingViewSegmentsTrait
{
    /**
     * @param ListBillingViewSegmentsRequest $args
     * @return ListBillingViewSegmentsResponse
     */
    public function listBillingViewSegments(ListBillingViewSegmentsRequest $args)
    {
        $result = parent::listBillingViewSegments($args->toArray());
        return new ListBillingViewSegmentsResponse($result->toArray());
    }
}
