<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListSharedDNSViews;

trait ListSharedDNSViewsTrait
{
    /**
     * @param ListSharedDNSViewsRequest $args
     * @return ListSharedDNSViewsResponse
     */
    public function listSharedDNSViews(ListSharedDNSViewsRequest $args)
    {
        $result = parent::listSharedDNSViews($args->toArray());
        return new ListSharedDNSViewsResponse($result->toArray());
    }
}
