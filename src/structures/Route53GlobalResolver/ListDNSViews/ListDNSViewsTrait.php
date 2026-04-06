<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListDNSViews;

trait ListDNSViewsTrait
{
    /**
     * @param ListDNSViewsRequest $args
     * @return ListDNSViewsResponse
     */
    public function listDNSViews(ListDNSViewsRequest $args)
    {
        $result = parent::listDNSViews($args->toArray());
        return new ListDNSViewsResponse($result->toArray());
    }
}
